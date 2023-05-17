
const constraints = { "video": { width: { max: 380 }, height: { max: 720 }}, "audio" : true };

var theStream;
var theRecorder;
var recordedChunks = [];

function startFunction() {
	document.getElementById('start').style.display = "none";
		document.getElementById('stop').style.display = "block";

  navigator.mediaDevices.getUserMedia(constraints)
      .then(gotMedia)
      .catch(e => { console.error('getUserMedia() failed: ' + e); });
}

function gotMedia(stream) {
  theStream = stream;
  var video = document.querySelector('video');
  video.srcObject = stream;
  try {
    recorder = new MediaRecorder(stream, {mimeType : "video/webm"});
  } catch (e) {
    console.error('Exception while creating MediaRecorder: ' + e);
    return;
  }
  
  theRecorder = recorder;
  recorder.ondataavailable = 
      (event) => { recordedChunks.push(event.data); };
  recorder.start(100);
}

// From @samdutton's "Record Audio and Video with MediaRecorder"
// https://developers.google.com/web/updates/2016/01/mediarecorder
function download() {

  theRecorder.stop();
  theStream.getTracks().forEach(track => { track.stop(); });

  var blob = new Blob(recordedChunks, {type: "video/mp4"});
  var url =  URL.createObjectURL(blob);

  var formdata = new FormData();
		formdata.append('blobFile', new Blob(recordedChunks, {type: "video/mp4"}));

		fetch('video-uploader.php', {

			method: 'POST',
			body: formdata
			})

		//  setTimeout() here is needed for Firefox.
 setTimeout(function() { 

 	alert('video file uploaded')
 	document.location.href = "video-upload"

 	 }, 1000); 


  // var a = document.createElement("a");
  // document.body.appendChild(a);
  // a.style = "display: none";
  // a.href = url;
  // a.download = 'test.mp4';
  // a.click();
  // setTimeout() here is needed for Firefox.
 // setTimeout(function() { URL.revokeObjectURL(url); }, 100); 
}

