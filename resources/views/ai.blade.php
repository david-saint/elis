<html>
<head>
  <title>API Example</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    var accessToken = "7414f320ad1e4423bff2d76987f9b1b1";
    var baseUrl = "https://api.api.ai/v1/";
    $(document).ready(function() {
      $("#input").keypress(function(event) {
        if (event.which == 13) {
          event.preventDefault();
          send();
        }
      });
      $("#rec").click(function(event) {
        switchRecognition();
      });
    });
    var recognition;
    function startRecognition() {
      recognition = new webkitSpeechRecognition();
      recognition.onstart = function(event) {
        updateRec();
      };
      recognition.onresult = function(event) {
        var text = "";
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            text += event.results[i][0].transcript;
          }
          setInput(text);
        stopRecognition();
      };
      recognition.onend = function() {
        stopRecognition();
      };
      recognition.lang = "en-US";
      recognition.start();
    }
  
    function stopRecognition() {
      if (recognition) {
        recognition.stop();
        recognition = null;
      }
      updateRec();
    }
    function switchRecognition() {
      if (recognition) {
        stopRecognition();
      } else {
        startRecognition();
      }
    }
    function setInput(text) {
      $("#input").val(text);
      send();
    }
    function updateRec() {
      $("#rec").text(recognition ? "Stop" : "Speak");
    }
    function send() {
      var text = $("#input").val();
      $.ajax({
        type: "POST",
        url: baseUrl + "query?v=20150910",
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        headers: {
          "Authorization": "Bearer " + accessToken
        },
        data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
        success: function(data) {
          setResponse(JSON.stringify(data, undefined, 2));
       /*   var respText = data.result.fulfillment.speech;
          var actionText = data.result.action;
          var actionText = data.result.action;
          console.log("Respuesta: " + respText);
          setResponse(respText);
          $( "#usb" ).append(
             '<li>'+actionText+'</li>' 
             ); */
             //output
             var respText = data.result.fulfillment.speech;
             $( "#output_text" ).append(
                '<li>'+respText+'</li>' 
             ); 
             if (typeof data.result.parameters.products !== 'undefined') {
                $( "#to_query" ).append(
                  '<li>'+data.result.parameters.products+'</li>' 
                );  
              }
            if (typeof data.result.parameters.business !== 'undefined') {
                $( "#to_query" ).append(
                  '<li>'+data.result.parameters.business+'</li>' 
                );  
              }
             //output
        },
        error: function() {
          setResponse("Internal Server Error");
        }
      });
      setResponse("Loading...");
    }
    //insert
    //insert
    function setResponse(val) {
      $("#response").text(val);
    }
  </script>
  <style type="text/css">
    body { width: 500px; margin: 0 auto; text-align: center; margin-top: 20px; }
    div {  position: absolute; }
    input { width: 400px; }
    button { width: 50px; }
    textarea { width: 100%; }
  </style>
</head>
<body style="position: relative;">
  <div>
    <input id="input" type="text"> <button id="rec">Speak</button>
    <br>Response<br> <textarea id="response" cols="40" rows="20"></textarea>
  </div>
  <ul style="heiht: 10px; position: absolute; bottom: 10%; left: 1%;">
    <li id="to_query"></li>
  </ul>
  <ul style="heiht: 10px; position: absolute; bottom: 10%; right: 1%;">
    <li id="output_text"></li>
  </ul>
</body>
</html>