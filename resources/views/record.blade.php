<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <style>
        /* style.css*/

        /* Media Queries */

        /* Small Devices*/

        @media (min-width: 0px) {
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                padding: 0;
                background-color: lightcyan;
                color: #414142;
                position: relative;
                font-family: monospace;
            }

            .title {
                font-size: 30px;
                margin-bottom: 55px;
                text-align: center;
            }

            .audio-recording-container {
                width: 100%;
                height: 100vh;
                /* view port height*/
                /*targeting Chrome & Safari*/
                display: -webkit-flex;
                /*targeting IE10*/
                display: -ms-flex;
                display: flex;
                flex-direction: column;
                justify-content: center;
                /*horizontal centering*/
                align-items: center;
            }

            .start-recording-button {
                font-size: 70px;
                color: #435f7a;
                cursor: pointer;
                opacity: .5;
                margin-bottom: 30px;
            }

            .start-recording-button:hover {
                opacity: 1;
            }

            .recording-contorl-buttons-container {
                /*targeting Chrome & Safari*/
                display: -webkit-flex;
                /*targeting IE10*/
                display: -ms-flex;
                display: flex;
                justify-content: space-evenly;
                /*horizontal centering*/
                align-items: center;
                width: 334px;
                margin-bottom: 30px;
            }

            .cancel-recording-button,
            .stop-recording-button {
                font-size: 70px;
                cursor: pointer;
            }

            .cancel-recording-button {
                color: red;
                opacity: 0.7;
            }

            .cancel-recording-button:hover {
                color: rgb(206, 4, 4);
            }

            .stop-recording-button {
                color: #33cc33;
                opacity: 0.7;
            }

            .stop-recording-button:hover {
                color: #27a527;
            }

            .recording-elapsed-time {
                /*targeting Chrome & Safari*/
                display: -webkit-flex;
                /*targeting IE10*/
                display: -ms-flex;
                display: flex;
                justify-content: center;
                /*horizontal centering*/
                align-items: center;
            }

            .red-recording-dot {
                font-size: 25px;
                color: red;
                margin-right: 12px;
                /*transitions with Firefox, IE and Opera Support browser support*/
                animation-name: flashing-recording-dot;
                -webkit-animation-name: flashing-recording-dot;
                -moz-animation-name: flashing-recording-dot;
                -o-animation-name: flashing-recording-dot;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                -moz-animation-duration: 2s;
                -o-animation-duration: 2s;
                animation-iteration-count: infinite;
                -webkit-animation-iteration-count: infinite;
                -moz-animation-iteration-count: infinite;
                -o-animation-iteration-count: infinite;
            }

            /* The animation code */
            @keyframes flashing-recording-dot {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-webkit-keyframes flashing-recording-dot {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-moz-keyframes flashing-recording-dot {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            @-o-keyframes flashing-recording-dot {
                0% {
                    opacity: 1;
                }

                50% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }

            .elapsed-time {
                font-size: 32px;
            }

            .recording-contorl-buttons-container.hide {
                display: none;
            }

            .overlay {
                position: absolute;
                top: 0;
                height: 100vh;
                width: 100%;
                background-color: rgba(82, 76, 76, 0.35);
                /*targeting Chrome & Safari*/
                display: -webkit-flex;
                /*targeting IE10*/
                display: -ms-flex;
                display: flex;
                justify-content: center;
                /*horizontal centering*/
                align-items: center;
            }

            .overlay.hide {
                display: none;
            }

            .browser-not-supporting-audio-recording-box {
                /*targeting Chrome & Safari*/
                display: -webkit-flex;
                /*targeting IE10*/
                display: -ms-flex;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                /*horizontal centering*/
                align-items: center;
                width: 317px;
                height: 119px;
                background-color: white;
                border-radius: 10px;
                padding: 15px;
                font-size: 16px;
            }

            .close-browser-not-supported-box {
                cursor: pointer;
                background-color: #abc1c05c;
                border-radius: 10px;
                font-size: 16px;
                border: none;
            }

            .close-browser-not-supported-box:hover {
                background-color: #92a5a45c;
            }

            .close-browser-not-supported-box:focus {
                outline: none;
                border: none;
            }

            .audio-element.hide {
                display: none;
            }

            .text-indication-of-audio-playing-container {
                height: 20px;
            }

            .text-indication-of-audio-playing {
                font-size: 20px;
            }

            .text-indication-of-audio-playing.hide {
                display: none;
            }

            /* 3 Dots animation*/
            .text-indication-of-audio-playing span {
                /*transitions with Firefox, IE and Opera Support browser support*/
                animation-name: blinking-dot;
                -webkit-animation-name: blinking-dot;
                -moz-animation-name: blinking-dot;
                -o-animation-name: blinking-dot;
                animation-duration: 2s;
                -webkit-animation-duration: 2s;
                -moz-animation-duration: 2s;
                -o-animation-duration: 2s;
                animation-iteration-count: infinite;
                -webkit-animation-iteration-count: infinite;
                -moz-animation-iteration-count: infinite;
                -o-animation-iteration-count: infinite;
            }

            .text-indication-of-audio-playing span:nth-child(2) {
                animation-delay: .4s;
                -webkit-animation-delay: .4s;
                -moz-animation-delay: .4s;
                -o-animation-delay: .4s;
            }

            .text-indication-of-audio-playing span:nth-child(3) {
                animation-delay: .8s;
                -webkit-animation-delay: .8s;
                -moz-animation-delay: .8s;
                -o-animation-delay: .8s;
            }

            /* The animation code */
            @keyframes blinking-dot {
                0% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            /* The animation code */
            @-webkit-keyframes blinking-dot {
                0% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            /* The animation code */
            @-moz-keyframes blinking-dot {
                0% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }

            /* The animation code */
            @-o-keyframes blinking-dot {
                0% {
                    opacity: 0;
                }

                50% {
                    opacity: 1;
                }

                100% {
                    opacity: 0;
                }
            }
        }

        /* Medium devices */

        @media (min-width: 768px) {}

        /* Large devices */

        @media (min-width: 992px) {}

        /*Ipad pro view*/

        /*
  @media (min-width: 1024px) {

  } */

        /* Extra Large devices */

        @media (min-width: 1200px) {}
    </style>
</head>

<body>

    <div class="audio-recording-container">
        <h1 class="title">Audio Recording API Demo</h1>
        <i class="start-recording-button fa fa-microphone" aria-hidden="true"></i>
        <div class="recording-contorl-buttons-container hide">
            <i class="cancel-recording-button fa fa-times-circle-o" aria-hidden="true"></i>
            <div class="recording-elapsed-time">
                <i class="red-recording-dot fa fa-circle" aria-hidden="true"></i>
                <p class="elapsed-time"></p>
            </div>
            <i class="stop-recording-button fa fa-stop-circle-o" aria-hidden="true"></i>
        </div>
        <div class="text-indication-of-audio-playing-container">
            <p class="text-indication-of-audio-playing hide">Audio is playing<span>.</span><span>.</span><span>.</span>
            </p>
            <div id="translated-text"></div>
        </div>
    </div>
    <div class="overlay hide">
        <div class="browser-not-supporting-audio-recording-box">
            <p>To record audio, use browsers like Chrome and Firefox that support audio recording.</p>
            <button type="button" class="close-browser-not-supported-box">Ok.</button>
        </div>
    </div>

    <audio controls class="audio-element hide">
    </audio>

    <ol style=" margin-top: 20px" id="recordingsList"></ol>

    <div id="input-audio"></div>

    <script>
        // index.js ---------------
        //Model
        //none

        //View
        var microphoneButton = document.getElementsByClassName("start-recording-button")[0];
        var recordingControlButtonsContainer = document.getElementsByClassName("recording-contorl-buttons-container")[0];
        var stopRecordingButton = document.getElementsByClassName("stop-recording-button")[0];
        var cancelRecordingButton = document.getElementsByClassName("cancel-recording-button")[0];
        var elapsedTimeTag = document.getElementsByClassName("elapsed-time")[0];
        var closeBrowserNotSupportedBoxButton = document.getElementsByClassName("close-browser-not-supported-box")[0];
        var overlay = document.getElementsByClassName("overlay")[0];
        var audioElement = document.getElementsByClassName("audio-element")[0];
        var audioElementSource = document.getElementsByClassName("audio-element")[0]
            .getElementsByTagName("source")[0];
        var textIndicatorOfAudiPlaying = document.getElementsByClassName("text-indication-of-audio-playing")[0];

        //Listeners

        //Listen to start recording button
        microphoneButton.onclick = startAudioRecording;

        //Listen to stop recording button
        stopRecordingButton.onclick = stopAudioRecording;

        //Listen to cancel recording button
        cancelRecordingButton.onclick = cancelAudioRecording;

        //Listen to when the ok button is clicked in the browser not supporting audio recording box
        closeBrowserNotSupportedBoxButton.onclick = hideBrowserNotSupportedOverlay;

        //Listen to when the audio being played ends
        audioElement.onended = hideTextIndicatorOfAudioPlaying;

        /** Displays recording control buttons */
        function handleDisplayingRecordingControlButtons() {
            //Hide the microphone button that starts audio recording
            microphoneButton.style.display = "none";

            //Display the recording control buttons
            recordingControlButtonsContainer.classList.remove("hide");

            //Handle the displaying of the elapsed recording time
            handleElapsedRecordingTime();
        }

        /** Hide the displayed recording control buttons */
        function handleHidingRecordingControlButtons() {
            //Display the microphone button that starts audio recording
            microphoneButton.style.display = "block";

            //Hide the recording control buttons
            recordingControlButtonsContainer.classList.add("hide");

            //stop interval that handles both time elapsed and the red dot
            clearInterval(elapsedTimeTimer);
        }

        /** Displays browser not supported info box for the user*/
        function displayBrowserNotSupportedOverlay() {
            overlay.classList.remove("hide");
        }

        /** Displays browser not supported info box for the user*/
        function hideBrowserNotSupportedOverlay() {
            overlay.classList.add("hide");
        }

        /** Creates a source element for the the audio element in the HTML document*/
        function createSourceForAudioElement() {
            let sourceElement = document.createElement("source");
            audioElement.appendChild(sourceElement);

            audioElementSource = sourceElement;
        }

        /** Display the text indicator of the audio being playing in the background */
        function displayTextIndicatorOfAudioPlaying() {
            textIndicatorOfAudiPlaying.classList.remove("hide");
        }

        /** Hide the text indicator of the audio being playing in the background */
        function hideTextIndicatorOfAudioPlaying() {
            textIndicatorOfAudiPlaying.classList.add("hide");
        }

        //Controller

        /** Stores the actual start time when an audio recording begins to take place to ensure elapsed time start time is accurate*/
        var audioRecordStartTime;

        /** Stores the maximum recording time in hours to stop recording once maximum recording hour has been reached */
        var maximumRecordingTimeInHours = 1;

        /** Stores the reference of the setInterval function that controls the timer in audio recording*/
        var elapsedTimeTimer;

        /** Starts the audio recording*/
        function startAudioRecording() {

            console.log("Recording Audio...");

            //If a previous audio recording is playing, pause it
            let recorderAudioIsPlaying = !audioElement
                .paused; // the paused property tells whether the media element is paused or not
            console.log("paused?", !recorderAudioIsPlaying);
            if (recorderAudioIsPlaying) {
                audioElement.pause();
                //also hide the audio playing indicator displayed on the screen
                hideTextIndicatorOfAudioPlaying();
            }

            //start recording using the audio recording API
            audioRecorder.start()
                .then(() => { //on success

                    //store the recording start time to display the elapsed time according to it
                    audioRecordStartTime = new Date();

                    //display control buttons to offer the functionality of stop and cancel
                    handleDisplayingRecordingControlButtons();
                })
                .catch(error => { //on error
                    console.log(error);
                    //No Browser Support Error
                    if (error.message.includes(
                            "mediaDevices API or getUserMedia method is not supported in this browser.")) {
                        console.log("To record audio, use browsers like Chrome and Firefox.");
                        displayBrowserNotSupportedOverlay();
                    }

                    //Error handling structure
                    switch (error.name) {
                        case 'AbortError': //error from navigator.mediaDevices.getUserMedia
                            console.log("An AbortError has occured.");
                            break;
                        case 'NotAllowedError': //error from navigator.mediaDevices.getUserMedia
                            console.log("A NotAllowedError has occured. User might have denied permission.");
                            break;
                        case 'NotFoundError': //error from navigator.mediaDevices.getUserMedia
                            console.log("A NotFoundError has occured.");
                            break;
                        case 'NotReadableError': //error from navigator.mediaDevices.getUserMedia
                            console.log("A NotReadableError has occured.");
                            break;
                        case 'SecurityError': //error from navigator.mediaDevices.getUserMedia or from the MediaRecorder.start
                            console.log("A SecurityError has occured.");
                            break;
                        case 'TypeError': //error from navigator.mediaDevices.getUserMedia
                            console.log("A TypeError has occured.");
                            break;
                        case 'InvalidStateError': //error from the MediaRecorder.start
                            console.log("An InvalidStateError has occured.");
                            break;
                        case 'UnknownError': //error from the MediaRecorder.start
                            console.log("An UnknownError has occured.");
                            break;
                        default:
                            console.log("An error occured with the error name " + error.name);
                    };
                });
        }
        /** Stop the currently started audio recording & sends it
         */
        function stopAudioRecording() {

            console.log("Stopping Audio Recording...");

            //stop the recording using the audio recording API
            audioRecorder.stop()
                .then(audioAsblob => {
                    //Play recorder audio
                    postAudio(audioAsblob);
                    // playAudio(audioAsblob);

                    //hide recording control button & return record icon
                    handleHidingRecordingControlButtons();
                })
                .catch(error => {
                    //Error handling structure
                    switch (error.name) {
                        case 'InvalidStateError': //error from the MediaRecorder.stop
                            console.log("An InvalidStateError has occured.");
                            break;
                        default:
                            console.log("An error occured with the error name " + error.name);
                    };
                });
        }

        /** Cancel the currently started audio recording */
        function cancelAudioRecording() {
            console.log("Canceling audio...");

            //cancel the recording using the audio recording API
            audioRecorder.cancel();

            //hide recording control button & return record icon
            handleHidingRecordingControlButtons();
        }

        /** Plays recorded audio using the audio element in the HTML document
         * @param {Blob} recorderAudioAsBlob - recorded audio as a Blob Object
         */
        function playAudio(recorderAudioAsBlob) {

            //read content of files (Blobs) asynchronously
            let reader = new FileReader();

            //once content has been read
            reader.onload = (e) => {
                //store the base64 URL that represents the URL of the recording audio
                let base64URL = e.target.result;

                //If this is the first audio playing, create a source element
                //as pre populating the HTML with a source of empty src causes error
                if (!audioElementSource) //if its not defined create it (happens first time only)
                    createSourceForAudioElement();

                //set the audio element's source using the base64 URL
                audioElementSource.src = base64URL;

                //set the type of the audio element based on the recorded audio's Blob type
                let BlobType = recorderAudioAsBlob.type.includes(";") ?
                    recorderAudioAsBlob.type.substr(0, recorderAudioAsBlob.type.indexOf(';')) : recorderAudioAsBlob
                    .type;
                audioElementSource.type = BlobType

                //call the load method as it is used to update the audio element after changing the source or other settings
                audioElement.load();

                //play the audio after successfully setting new src and type that corresponds to the recorded audio
                console.log("Playing audio...");
                audioElement.play();

                //Display text indicator of having the audio play in the background
                displayTextIndicatorOfAudioPlaying();
            };

            //read content and convert it to a URL (base64)
            reader.readAsDataURL(recorderAudioAsBlob);
        }

        /** Computes the elapsed recording time since the moment the function is called in the format h:m:s*/
        function handleElapsedRecordingTime() {
            //display inital time when recording begins
            displayElapsedTimeDuringAudioRecording("00:00");

            //create an interval that compute & displays elapsed time, as well as, animate red dot - every second
            elapsedTimeTimer = setInterval(() => {
                //compute the elapsed time every second
                let elapsedTime = computeElapsedTime(audioRecordStartTime); //pass the actual record start time
                //display the elapsed time
                displayElapsedTimeDuringAudioRecording(elapsedTime);
            }, 1000); //every second
        }

        /** Display elapsed time during audio recording
         * @param {String} elapsedTime - elapsed time in the format mm:ss or hh:mm:ss
         */
        function displayElapsedTimeDuringAudioRecording(elapsedTime) {
            //1. display the passed elapsed time as the elapsed time in the elapsedTime HTML element
            elapsedTimeTag.innerHTML = elapsedTime;

            //2. Stop the recording when the max number of hours is reached
            if (elapsedTimeReachedMaximumNumberOfHours(elapsedTime)) {
                stopAudioRecording();
            }
        }

        /**
         * @param {String} elapsedTime - elapsed time in the format mm:ss or hh:mm:ss
         * @returns {Boolean} whether the elapsed time reached the maximum number of hours or not
         */
        function elapsedTimeReachedMaximumNumberOfHours(elapsedTime) {
            //Split the elapsed time by the symbo :
            let elapsedTimeSplitted = elapsedTime.split(":");

            //Turn the maximum recording time in hours to a string and pad it with zero if less than 10
            let maximumRecordingTimeInHoursAsString = maximumRecordingTimeInHours < 10 ? "0" + maximumRecordingTimeInHours :
                maximumRecordingTimeInHours.toString();

            //if it the elapsed time reach hours and also reach the maximum recording time in hours return true
            if (elapsedTimeSplitted.length === 3 && elapsedTimeSplitted[0] === maximumRecordingTimeInHoursAsString)
                return true;
            else //otherwise, return false
                return false;
        }

        /** Computes the elapsedTime since the moment the function is called in the format mm:ss or hh:mm:ss
         * @param {String} startTime - start time to compute the elapsed time since
         * @returns {String} elapsed time in mm:ss format or hh:mm:ss format, if elapsed hours are 0.
         */
        function computeElapsedTime(startTime) {
            //record end time
            let endTime = new Date();

            //time difference in ms
            let timeDiff = endTime - startTime;

            //convert time difference from ms to seconds
            timeDiff = timeDiff / 1000;

            //extract integer seconds that dont form a minute using %
            let seconds = Math.floor(timeDiff % 60); //ignoring uncomplete seconds (floor)

            //pad seconds with a zero if neccessary
            seconds = seconds < 10 ? "0" + seconds : seconds;

            //convert time difference from seconds to minutes using %
            timeDiff = Math.floor(timeDiff / 60);

            //extract integer minutes that don't form an hour using %
            let minutes = timeDiff %
                60; //no need to floor possible incomplete minutes, becase they've been handled as seconds
            minutes = minutes < 10 ? "0" + minutes : minutes;

            //convert time difference from minutes to hours
            timeDiff = Math.floor(timeDiff / 60);

            //extract integer hours that don't form a day using %
            let hours = timeDiff % 24; //no need to floor possible incomplete hours, becase they've been handled as seconds

            //convert time difference from hours to days
            timeDiff = Math.floor(timeDiff / 24);

            // the rest of timeDiff is number of days
            let days = timeDiff; //add days to hours

            let totalHours = hours + (days * 24);
            totalHours = totalHours < 10 ? "0" + totalHours : totalHours;

            if (totalHours === "00") {
                return minutes + ":" + seconds;
            } else {
                return totalHours + ":" + minutes + ":" + seconds;
            }
        }

        // audio-recording.js ---------------
        //API to handle audio recording

        var audioRecorder = {
            /** Stores the recorded audio as Blob objects of audio data as the recording continues*/
            audioBlobs: [],
            /*of type Blob[]*/
            /** Stores the reference of the MediaRecorder instance that handles the MediaStream when recording starts*/
            mediaRecorder: null,
            /*of type MediaRecorder*/
            /** Stores the reference to the stream currently capturing the audio*/
            streamBeingCaptured: null,
            /*of type MediaStream*/
            /** Start recording the audio
             * @returns {Promise} - returns a promise that resolves if audio recording successfully started
             */
            start: function() {
                //Feature Detection
                if (!(navigator.mediaDevices && navigator.mediaDevices.getUserMedia)) {
                    //Feature is not supported in browser
                    //return a custom error
                    return Promise.reject(new Error(
                        'mediaDevices API or getUserMedia method is not supported in this browser.'));
                } else {
                    //Feature is supported in browser

                    //create an audio stream
                    return navigator.mediaDevices.getUserMedia({
                            audio: true
                        } /*of type MediaStreamConstraints*/ )
                        //returns a promise that resolves to the audio stream
                        .then(stream /*of type MediaStream*/ => {

                            //save the reference of the stream to be able to stop it when necessary
                            audioRecorder.streamBeingCaptured = stream;

                            //create a media recorder instance by passing that stream into the MediaRecorder constructor
                            audioRecorder.mediaRecorder = new MediaRecorder(stream);
                            /*the MediaRecorder interface of the MediaStream Recording
                                               API provides functionality to easily record media*/

                            //clear previously saved audio Blobs, if any
                            audioRecorder.audioBlobs = [];

                            //add a dataavailable event listener in order to store the audio data Blobs when recording
                            audioRecorder.mediaRecorder.addEventListener("dataavailable", event => {
                                //store audio Blob object
                                audioRecorder.audioBlobs.push(event.data);
                            });

                            //start the recording by calling the start method on the media recorder
                            audioRecorder.mediaRecorder.start();
                        });

                    /* errors are not handled in the API because if its handled and the promise is chained, the .then after the catch will be executed*/
                }
            },
            /** Stop the started audio recording
             * @returns {Promise} - returns a promise that resolves to the audio as a blob file
             */
            stop: function() {
                //return a promise that would return the blob or URL of the recording
                return new Promise(resolve => {
                    //save audio type to pass to set the Blob type
                    let mimeType = audioRecorder.mediaRecorder.mimeType;

                    //listen to the stop event in order to create & return a single Blob object
                    audioRecorder.mediaRecorder.addEventListener("stop", () => {
                        //create a single blob object, as we might have gathered a few Blob objects that needs to be joined as one
                        let audioBlob = new Blob(audioRecorder.audioBlobs, {
                            type: mimeType
                        });

                        //resolve promise with the single audio blob representing the recorded audio
                        resolve(audioBlob);
                    });
                    audioRecorder.cancel();
                });
            },
            /** Cancel audio recording*/
            cancel: function() {
                //stop the recording feature
                audioRecorder.mediaRecorder.stop();

                //stop all the tracks on the active stream in order to stop the stream
                audioRecorder.stopStream();

                //reset API properties for next recording
                audioRecorder.resetRecordingProperties();
            },
            /** Stop all the tracks on the active stream in order to stop the stream and remove
             * the red flashing dot showing in the tab
             */
            stopStream: function() {
                //stopping the capturing request by stopping all the tracks on the active stream
                audioRecorder.streamBeingCaptured.getTracks() //get all tracks from the stream
                    .forEach(track /*of type MediaStreamTrack*/ => track.stop()); //stop each one
            },
            /** Reset all the recording properties including the media recorder and stream being captured*/
            resetRecordingProperties: function() {
                audioRecorder.mediaRecorder = null;
                audioRecorder.streamBeingCaptured = null;

                /*No need to remove event listeners attached to mediaRecorder as
                If a DOM element which is removed is reference-free (no references pointing to it), the element itself is picked
                up by the garbage collector as well as any event handlers/listeners associated with it.
                getEventListeners(audioRecorder.mediaRecorder) will return an empty array of events.*/
            }
        }


        // // alliiiii
        // var blob = new Blob({
        //     type: 'audio/wav'
        // });


        function postAudio(blob, filename = 'test') {
            var xhr = new XMLHttpRequest();
            xhr.onload = function(e) {
                if (this.readyState === 4) {
                    console.log('save...!')
                }
            };


            var fd = new FormData();
            fd.append("recorder", blob, filename + '.wav');

            xhr.onreadystatechange = function(e) {
                if (xhr.readyState === 4) {
                    var response = JSON.parse(xhr.responseText);
                    if (xhr.status === 200) {
                        console.log('successful');
                        console.log(e.target.responseText);
                        // document.getElementById('translated-text').innerHTML = e.target.responseText;
                        document.getElementById("translated-text").innerHTML  = e.target.responseText;
                    } else {
                        console.log('failed');
                    }
                }
            }

            xhr.open("POST", "/record", true);
            // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var csrfToken = "{{ csrf_token() }}";

            xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            xhr.send(fd);
        }
    </script>
</body>

</html>
