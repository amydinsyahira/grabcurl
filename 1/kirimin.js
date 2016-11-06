    var http_request = false;
    function makePOSTRequest(url, parameters) {
    http_request = false;
    if (window.XMLHttpRequest) { // Mozilla, Safari,…
    http_request = new XMLHttpRequest();
    if (http_request.overrideMimeType) {
    // set type accordingly to anticipated content type
    //http_request.overrideMimeType('text/xml');
    http_request.overrideMimeType('text/html');
    }
    } else if (window.ActiveXObject) { // IE
    try {
    http_request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
    try {
    http_request = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (e) {}
    }
    }
    if (!http_request) {
    alert('Cannot create XMLHTTP instance');
    return false;
    }

    http_request.onreadystatechange = alertContents;
    http_request.open('POST', url, true);
    http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http_request.setRequestHeader("Content-length", parameters.length);
    http_request.setRequestHeader("Connection", "close");
    http_request.send(parameters);
    }

    function alertContents() {
    if (http_request.readyState == 4 || http_request.readyState == 'complete') {
    if (http_request.status == 200) {
    //alert(http_request.responseText);
    result = http_request.responseText;
    document.getElementById('informasi').innerHTML = result;
    } else {
    alert('There was a problem with the request.');
    }
    }
    else {
    document.getElementById('informasi').innerHTML = "<img src='ajaxr.gif' /><br />Please Wait...";
    }

    }

    function get(obj) {
    var poststr ="ruteBerangkat=" + encodeURI( document.getElementById("ruteBerangkat").value ) +
    "&page=" + encodeURI( document.getElementById("page").value ) +
    "&ruteTujuan=" + encodeURI( document.getElementById("ruteTujuan").value ) +
    "&tglBerangkatPergi=" + encodeURI( document.getElementById("tglBerangkatPergi").value ) +
    "&blnthnBerangkatPergi=" + encodeURI( document.getElementById("blnthnBerangkatPergi").value ) +
    "&tglBerangkatKembali=" + encodeURI( document.getElementById("tglBerangkatKembali").value ) +
    "&blnthnBerangkatKembali=" + encodeURI( document.getElementById("blnthnBerangkatKembali").value ) +
    "&jmlInfant=" + encodeURI( document.getElementById("jmlInfant").value ) +
    "&ruteKembali=" + encodeURI( document.getElementById("ruteKembali").value ) +
    "&Submit=" + encodeURI( document.getElementById("Submit").value ) +
    "&jmlPenumpang=" + encodeURI( document.getElementById("jmlPenumpang").value );
    makePOSTRequest('tes.php', poststr);
    }
	