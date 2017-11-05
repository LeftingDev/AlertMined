//Check if message it's completed (allow or not allow mined).
    if (document.cookie.indexOf('AlertMined=') == -1 ) {
        //if COOKIE (AlertMined) is not existed.
        alert("Please completed if you accept a mined or not.");
    } else {
        //if COOKIE (AlertMined) is existed.
        AlertMined=RegExp("AlertMined[^;]+").exec(document.cookie);
        AlertMined=unescape(!!AlertMined ? AlertMined.toString().replace(/^[^=]+./,"") : "");
        if (AlertMined == "true") {
            //user mined
            alert("Thanks you");
        } else {
            //user not accept mined
            alert("We respect your choice!");
        }
    }
