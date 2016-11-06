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
		if (document.getElementById("trip_type").value == "one+way") {
	var MonthYear = document.getElementById("Year").value +"-"+ document.getElementById("Month").value;
    var poststr ="search_flights[trip]=" + encodeURI( document.getElementById("trip_type").value ) +
    "&search_flights[passengers]=" + encodeURI( document.getElementById("passenger").value ) +
    "&search_flights[flight_from_airport]=" + encodeURI( document.getElementById("depart").value ) +
    "&search_flights[flight_to_airport]=" + encodeURI( document.getElementById("arrive").value ) +
    "&search_flights[date_from_day]=" + encodeURI( document.getElementById("Date").value ) +
    "&search_flights[date_from_month_year]=" + MonthYear +
    "&search_flights[_csrf_token]=" + encodeURI( document.getElementById("token_csrf").value ) +
    "&sdf=";
    makePOSTRequest('tes.php', poststr);
		} else {
	var MonthYear = document.getElementById("Year").value +"-"+ document.getElementById("Month").value;
	var MonthYear2 = document.getElementById("Year2").value +"-"+ document.getElementById("Month2").value;
    var poststr ="search_flights[trip]=" + encodeURI( document.getElementById("trip_type").value ) +
    "&search_flights[passengers]=" + encodeURI( document.getElementById("passenger").value ) +
    "&search_flights[flight_from_airport]=" + encodeURI( document.getElementById("depart").value ) +
    "&search_flights[flight_to_airport]=" + encodeURI( document.getElementById("arrive").value ) +
    "&search_flights[date_from_day]=" + encodeURI( document.getElementById("Date").value ) +
    "&search_flights[date_from_month_year]=" + MonthYear +
    "&search_flights[date_to_day]=" + encodeURI( document.getElementById("Date2").value ) +
    "&search_flights[date_to_month_year]=" + MonthYear2 +
    "&search_flights[_csrf_token]=" + encodeURI( document.getElementById("token_csrf").value ) +
    "&sdf=";
    makePOSTRequest('tes.php', poststr);
		}
    }