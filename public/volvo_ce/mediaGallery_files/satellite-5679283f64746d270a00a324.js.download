var VTCStatisticsSender = function (debug) {
    this.targetOrigin = null ;
    this.debug = debug;
    var _this = this;
 
    this.Init = function () {
        _this.getTargetOrigin();
        var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
        var eventer = window[eventMethod];
        var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
 
        eventer(messageEvent, this.ReceiveMessage, false);
    };
   
    this.getTargetOrigin = function() {
        var documentIframes = document.getElementsByTagName("iframe");
        _this.Log("Found " + documentIframes.length + " iframes");
        if(documentIframes.length > 0) {
                                    for(var i = 0; i < documentIframes.length; i++) {
               _this.Log("Checking src " + documentIframes[i].src);
               if(documentIframes[i].src.indexOf("volvotrucks.com") !== -1 || documentIframes[i].src.indexOf("volvo.com") !== -1) {
                   _this.targetOrigin = documentIframes[i].src.split("/")[0] + "//" + documentIframes[i].src.match(/:\/\/(.[^/]+)/)[1];
                   _this.Log("Found valid iframe: " + _this.targetOrigin);
                    break;
               }
           }
                                }
    };
 
    this.ReceiveMessage = function (e) {
        if (e.origin !== _this.targetOrigin) {
            _this.Log("Invalid origin: " + e.origin + ", expected " + _this.targetOrigin);
            return;
        }
       
        if(e == null || e.data == null) {
            _this.Log("Received message but message was empty");
            return;
        }
       
        var data;
       
        try {
            data = JSON.parse(e.data);
        } catch (error) {
            _this.Log("Data was not parsable json.")
            return;
        }
       
        if(data.hasOwnProperty("request") == false) {
            _this.Log("No request property in message");
            return;
        }
       
        _this.Log("Received message data: " + e.data);
 
        if (data.request != "datalayer") {
            _this.Log("Invalid request data: " + data.request);
            return;
        }
 
        _this.Log("Sending datalayer");
        e.source.postMessage(JSON.stringify(dataLayer), _this.targetOrigin);
    };
 
    this.Log = function (message) {
        if (this.debug) {
            console.log(message);
        }
    };
};
 
 
(function () {
  var vtcss = new VTCStatisticsSender(true);
    vtcss.Init();
})();
