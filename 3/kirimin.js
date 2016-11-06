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
    document.getElementById('data').innerHTML = result;
    } else {
    alert('There was a problem with the request.');
    }
    }
    else {
    document.getElementById('data').innerHTML = "<img src='ajaxr.gif' /><br />Please Wait...";
    }

    }

    function get(obj) {
	var datedept = document.getElementById("Date").value + document.getElementById("Month").value;
	var datearrv = document.getElementById("Date2").value + document.getElementById("Month2").value;
    var poststr ="trip_type=" + encodeURI( document.getElementById("trip_type").value ) +
    "&date_flexibility=" + encodeURI( document.getElementById("date_flexibility").value ) +
    "&depart=" + encodeURI( document.getElementById("depart").value ) +
    "&dest.1=" + encodeURI( document.getElementById("arrive").value ) +
    "&date.0=" + datedept +
    "&date.1=" + datearrv +
    "&persons.0=" + encodeURI( document.getElementById("dewasa").value ) +
    "&persons.1=" + encodeURI( document.getElementById("anak").value ) +
    "&persons.2=" + encodeURI( document.getElementById("bayi").value ) +
    "&origin=" + encodeURI( document.getElementById("origin").value ) +
    "&usercountry=" + encodeURI( document.getElementById("usercountry").value );
    makePOSTRequest('tes.php', poststr);
    }
	