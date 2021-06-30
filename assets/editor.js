window.addEventListener('load', function () {
    var editor;
    ContentTools.StylePalette.add([
        new ContentTools.Style('lead', 'lead', ['p']),
        new ContentTools.Style('h4_editor', 'h4_editor', ['h4']),
        new ContentTools.Style('h4_editor', 'h4_editor', ['h1']),
        new ContentTools.Style('h4_editor', 'h4_editor', ['h2']),
        new ContentTools.Style('head_title', 'head_title', ['h2']),
        new ContentTools.Style('head_title', 'head_title', ['h1']),
        new ContentTools.Style('head_title', 'head_title', ['h3']),
        new ContentTools.Style('h4_editor', 'h4_editor', ['h3']),
        new ContentTools.Style('block-editor', 'block-editor', ['blockquote']),
        new ContentTools.Style('img-right', 'img-right', ['img']),
        new ContentTools.Style('img-left', 'img-left', ['img']),
        new ContentTools.Style('color_red', 'color_red', ['h1', 'h2', 'h3', 'h4', 'p']),
        new ContentTools.Style('color_green', 'color_green', ['h1', 'h2', 'h3', 'h4', 'p']),
    ]);

});

editor = ContentTools.EditorApp.get();
editor.init('*[data-editable]', 'data-name');
$content = $('#content');
// console.log($content.html());
editor.addEventListener('saved', function (ev) {
    var name, onStateChange, passive, payload, regions, xhr;

    // Check if this was a passive save
    passive = ev.detail().passive;

    // Check to see if there are any changes to save
    regions = ev.detail().regions;
    if (Object.keys(regions).length == 0) {
        return;
    }

    // Set the editors state to busy while we save our changes
    this.busy(true);

    // Collect the contents of each region into a FormData instance

    payload = new FormData();
    payload.append('__page__', window.location.pathname);
    for (name in regions) {
        payload.append(name, regions[name]);
    }
    payload.append('content', $content.html());


    // Send the update content to the server to be saved
    onStateChange = function (ev) {
        // Check if the request is finished
        if (ev.target.readyState == 4) {
            editor.busy(false);
            if (ev.target.status == '200') {
                // Save was successful, notify the user with a flash
                if (!passive) {
                    new ContentTools.FlashUI('ok');
                }
            } else {
                // Save failed, notify the user with a flash
                new ContentTools.FlashUI('no');
            }
        }
    };

    // xhr = new XMLHttpRequest();
    // xhr.addEventListener('readystatechange', onStateChange);
    // xhr.open('POST', base_url + 'editor/insertData');
    // xhr.send(payload);
    $.ajax({
        url: base_url + "editor/insertData",
        type: "post",
        data: payload,
        processData: false,
        contentType: false,

        success: function (data) {
            new ContentTools.FlashUI('ok');
            editor.busy(false);
            // console.log(data);
            setTimeout(function () {
                window.location.href = base_url + 'post';
            }, 2000);
        },
        error: function (xhr, status, error) {
            new ContentTools.FlashUI('no');
            console.log(xhr.responseText);
        }
    });
});


function imageUploader(dialog) {
    var image, xhr, xhrComplete, xhrProgress;

    // Set up the event handlers
    dialog.addEventListener('imageuploader.cancelupload', function () {
        // Cancel the current upload

        // Stop the upload
        if (xhr) {
            xhr.upload.removeEventListener('progress', xhrProgress);
            xhr.removeEventListener('readystatechange', xhrComplete);
            xhr.abort();
        }

        // Set the dialog to empty
        dialog.state('empty');
    });

    dialog.addEventListener('imageuploader.clear', function () {
        // Clear the current image
        dialog.clear();
        image = null;
    });



    dialog.addEventListener('imageuploader.fileready', function (ev) {

        // Upload a file to the server
        var formData;
        var file = ev.detail();
        // console.log(file.file['name']);

        // Define functions to handle upload progress and completion
        xhrProgress = function (ev) {
            // Set the progress for the upload
            dialog.progress((ev.loaded / ev.total) * 100);
        }

        xhrComplete = function (ev) {
            var response;

            // Check the request is complete
            if (ev.target.readyState != 4) {
                return;
            }

            // Clear the request
            xhr = null
            xhrProgress = null
            xhrComplete = null

            // Handle the result of the upload
            if (parseInt(ev.target.status) == 200) {
                // Unpack the response (from JSON)
                response = JSON.parse(ev.target.responseText);
                // console.log(response);

                // Store the image details
                image = {
                    size: response.size,
                    url: base_url + 'assets/images/' + response
                };

                // Populate the dialog
                dialog.populate(image.url, image.size);

            } else {
                // The request failed, notify the user
                new ContentTools.FlashUI('no');
            }
        }

        // Set the dialog state to uploading and reset the progress bar to 0
        dialog.state('uploading');
        dialog.progress(0);

        // Build the form data to post to the server

        formData = new FormData();
        formData.append('image', file.file);


        // Make the request
        xhr = new XMLHttpRequest();
        //XMLHttpRequest provides the ability to listen to various events that can occur while the request is being processed. This includes periodic progress notifications, error notifications, and so forth.

        xhr.upload.addEventListener('progress', xhrProgress);
        xhr.addEventListener('readystatechange', xhrComplete);
        xhr.open('POST', base_url + 'editor/upload', true);
        xhr.send(formData);


    });



    function rotateImage(direction) {
        // Request a rotated version of the image from the server
        var formData;

        // Define a function to handle the request completion
        xhrComplete = function (ev) {
            var response;

            // Check the request is complete
            if (ev.target.readyState != 4) {
                return;
            }

            // Clear the request
            xhr = null
            xhrComplete = null

            // Free the dialog from its busy state
            dialog.busy(false);

            // Handle the result of the rotation
            if (parseInt(ev.target.status) == 200) {
                // Unpack the response (from JSON)
                response = JSON.parse(ev.target.responseText);
                // response = ev.target.responseText;
                console.log(response);

                // Store the image details (use fake param to force refresh)
                image = {
                    // size: response.size,
                    // url: response + '?_ignore=' + Date.now()
                    url: response
                };

                // Populate the dialog
                dialog.populate(image.url, image.size);

            } else {
                // The request failed, notify the user
                new ContentTools.FlashUI('no');
            }
        }

        // Set the dialog to busy while the rotate is performed
        dialog.busy(true);

        // Build the form data to post to the server
        formData = new FormData();
        formData.append('url', image.url);
        formData.append('direction', direction);

        // Make the request
        xhr = new XMLHttpRequest();
        xhr.addEventListener('readystatechange', xhrComplete);
        xhr.open('POST', base_url + 'editor/rotateImg', true);
        xhr.send(formData);
    }

    dialog.addEventListener('imageuploader.rotateccw', function () {
        rotateImage('CCW');
    });

    dialog.addEventListener('imageuploader.rotatecw', function () {
        rotateImage('CW');
    });




    dialog.addEventListener('imageuploader.save', function () {
        var crop, cropRegion, formData;

        // Define a function to handle the request completion
        xhrComplete = function (ev) {
            // Check the request is complete
            if (ev.target.readyState !== 4) {
                return;
            }

            // Clear the request 
            xhr = null
            xhrComplete = null

            // Free the dialog from its busy state
            dialog.busy(false);

            // Handle the result of the rotation
            if (parseInt(ev.target.status) === 200) {
                // Unpack the response (from JSON)
                var response = JSON.parse(ev.target.responseText);
                console.log(response);
                // console.log(ev.target.responseText);
                // Trigger the save event against the dialog with details of the
                // image to be inserted.
                dialog.save(
                    response.url,

                    response.size,
                    {
                        'alt': response.alt,
                        'data-ce-max-width': '800px',
                        'class': 'img-item',
                    });
                // console.log(response.size);

            } else {
                // The request failed, notify the user
                new ContentTools.FlashUI('no');
            }
        }

        // Set the dialog to busy while the rotate is performed
        dialog.busy(true);

        // Build the form data to post to the server
        formData = new FormData();
        formData.append('url', image.url);

        // Set the width of the image when it's inserted, this is a default
        // the user will be able to resize the image afterwards.
        formData.append('width', 600);

        // formData.append('height',100);

        // Check if a crop region has been defined by the user
        if (dialog.cropRegion()) {

            formData.append('crop', dialog.cropRegion());

        }

        // Make the request
        xhr = new XMLHttpRequest();
        xhr.addEventListener('readystatechange', xhrComplete);
        xhr.open('POST', base_url + 'editor/save', true);
        xhr.send(formData);
    });



}



ContentTools.IMAGE_UPLOADER = imageUploader;