<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Video-Conferencia-UFC_TWITO</title>
</head>
<body>
  @if(session('profo'))
  <input type="hidden" value="{{session('profo')[0]->id}}" id="vidog">
   <!-- ------------------------------------------------------------------------------------------>
  @endif
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
    var ezio = 0, vid;
     vid  = $("#vidog").val();
    // console.log(vid);

    if(vid){
      var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const config = {
      name: "Demo User",
      meetingId: "milkyway",
      apiKey: "21645782-6f97-42e6-8813-a95999a7b3d9",

      containerId: null,

      redirectOnLeave: "{{url('projet/home_original')}}",

  micEnabled: true,
  webcamEnabled: true,
  participantCanToggleSelfWebcam: true,
  participantCanToggleSelfMic: true,
  participantCanLeave: true, // if false, leave button won't be visible

  chatEnabled: true,
  screenShareEnabled: true,
  pollEnabled: true,
  whiteboardEnabled: true,
  raiseHandEnabled: true,
  mode: "CONFERENCE", // VIEWER || CONFERENCE

  recording: {
    autoStart: true, // auto start recording on participant joined
    enabled: true,
    webhookUrl: "https://www.videosdk.live/callback",
   // awsDirPath: `/meeting-recordings/${meetingId}/`, // automatically save recording in this s3 path
  },

  livestream: {
    autoStart: true,
    enabled: true,
  },

  hls: {
    enabled: true,
    autoStart: false,
  },

  layout: {
    type: "SPOTLIGHT", // "SPOTLIGHT" | "SIDEBAR" | "GRID"
    priority: "PIN", // "SPEAKER" | "PIN",
    // gridSize: 3,
  },

  branding: {
    enabled: true,
    logoURL:
      "https://static.zujonow.com/videosdk.live/videosdk_logo_circle_big.png",
    name: "UFC-TWITO",
    poweredBy: false,
  },

  permissions: {
    pin: true,
    askToJoin: false, // Ask joined participants for entry in meeting
    toggleParticipantMic: true, // Can toggle other participant's mic
    toggleParticipantWebcam: true, // Can toggle other participant's webcam
    toggleParticipantScreenshare: true, // Can toggle other partcipant's screen share
    toggleParticipantMode: true, // Can toggle other participant's mode
    canCreatePoll: true, // Can create a poll
    toggleHls: true, // Can toggle Start HLS button
    drawOnWhiteboard: true, // Can draw on whiteboard
    toggleWhiteboard: true, // Can toggle whiteboard
    toggleRecording: true, // Can toggle meeting recording
    toggleLivestream: true, //can toggle live stream
    removeParticipant: true, // Can remove participant
    endMeeting: true, // Can end meeting
    changeLayout: true, //can change layout
  },

  
  joinScreen: {
    visible: true, // Show the join screen ?
    title: "Daily scrum", // Meeting title
    meetingUrl: window.location.href, // Meeting joining url
   
  },
 


  leftScreen: {
    // visible when redirect on leave not provieded
    actionButton: {
      // optional action button
      label: "Video SDK Live", // action button label
      href: "https://videosdk.live/", // action button href
    },
  },

  notificationSoundEnabled: true,

  debug: true, // pop up error during invalid config or netwrok error

  maxResolution: "sd"    };
  const meeting = new VideoSDKMeeting();
    meeting.init(config);
    
  });

  

  
  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.29/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);

    }else{
      var script = document.createElement("script");
  script.type = "text/javascript";

  script.addEventListener("load", function (event) {
    const config = {
      name: "Demo User",
      meetingId: "milkyway",
      apiKey: "21645782-6f97-42e6-8813-a95999a7b3d9",

      containerId: null,

      redirectOnLeave: "{{url('projet/home_original')}",

  micEnabled: true,
  webcamEnabled: true,
  participantCanToggleSelfWebcam: true,
  participantCanToggleSelfMic: true,
  participantCanLeave: true, // if false, leave button won't be visible

  chatEnabled: true,
  screenShareEnabled: true,
  pollEnabled: true,
  whiteboardEnabled: true,
  raiseHandEnabled: true,
  mode: "CONFERENCE", // VIEWER || CONFERENCE

  recording: {
    autoStart: true, // auto start recording on participant joined
    enabled: true,
    webhookUrl: "https://www.videosdk.live/callback",
   // awsDirPath: `/meeting-recordings/${meetingId}/`, // automatically save recording in this s3 path
  },

  livestream: {
    autoStart: true,
    enabled: true,
  },

  hls: {
    enabled: true,
    autoStart: false,
  },

  layout: {
    type: "SPOTLIGHT", // "SPOTLIGHT" | "SIDEBAR" | "GRID"
    priority: "PIN", // "SPEAKER" | "PIN",
    // gridSize: 3,
  },

  branding: {
    enabled: true,
    logoURL:
      "https://static.zujonow.com/videosdk.live/videosdk_logo_circle_big.png",
    name: "Prebuilt",
    poweredBy: false,
  },

  permissions: {
    pin: false,
    askToJoin: false, // Ask joined participants for entry in meeting
    toggleParticipantMic: false, // Can toggle other participant's mic
    toggleParticipantWebcam: false, // Can toggle other participant's webcam
    toggleParticipantScreenshare: false, // Can toggle other partcipant's screen share
    toggleParticipantMode: false, // Can toggle other participant's mode
    canCreatePoll: false, // Can create a poll
    toggleHls: false, // Can toggle Start HLS button
    drawOnWhiteboard: false, // Can draw on whiteboard
    toggleWhiteboard: false, // Can toggle whiteboard
    toggleRecording: false, // Can toggle meeting recording
    toggleLivestream: false, //can toggle live stream
    removeParticipant: false, // Can remove participant
    endMeeting: false, // Can end meeting
    changeLayout: false, //can change layout
  },

  
  joinScreen: {
    visible: true, // Show the join screen ?
    title: "Daily scrum", // Meeting title
    meetingUrl: window.location.href, // Meeting joining url
   
  },
 


  leftScreen: {
    // visible when redirect on leave not provieded
    actionButton: {
      // optional action button
      label: "Video SDK Live", // action button label
      href: "https://videosdk.live/", // action button href
    },
  },

  notificationSoundEnabled: true,

  debug: true, // pop up error during invalid config or netwrok error

  maxResolution: "sd"    };
  const meeting = new VideoSDKMeeting();
    meeting.init(config);
    
  });

  

  
  script.src =
    "https://sdk.videosdk.live/rtc-js-prebuilt/0.3.29/rtc-js-prebuilt.js";
  document.getElementsByTagName("head")[0].appendChild(script);
    }
  
</script>





         <!-- ------------------------------------------------------------------------------------------>


     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
     integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   


</body>
</html>