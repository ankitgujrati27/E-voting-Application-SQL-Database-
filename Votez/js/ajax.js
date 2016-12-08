

function voter_insert_check() {
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("user_message").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/voter_submit_registration.php",true);
        xmlhttp.send();

}

function cast_vote_check()
{
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if(xmlhttp.responseText == "redirect")
                    window.location = "cast_vote_page.php";
                else
                    document.getElementById("user_message_1").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/cast_voter_check.php",true);
        xmlhttp.send();

}


$( document ).ready(function() {
    $('#user-chart').hide();
    $('#user-chart-1').hide();
    $('#user-chart-2').hide();
    
    
    $( "#user_filter" ).change(function() 
    {
        var filter = $("#user_filter").val();
        if(filter == 'race')
        {
            $('#user-chart-1').hide();
            $('#user-chart-2').hide();
            $('#user-chart').show();
        }
        else if(filter == 'gender')
        {
            $('#user-chart').hide();
            $('#user-chart-2').hide();
            $('#user-chart-1').show();
        }
        else if(filter == 'profession')
        {
            $('#user-chart').hide();
            $('#user-chart-1').hide();
            $('#user-chart-2').show();
        }
        else
        {
            $('#user-chart').hide();
            $('#user-chart-1').hide();
            $('#user-chart-2').hide();
        }
    });
});

function get_positions() {
    var precinct = document.getElementById("precinct_info").value;
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("pos_info_elec_result").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/get_pos.php?precinct_id="+precinct,true);
        xmlhttp.send();

}

function elec_result() {
    var pos_pre = document.getElementById("pos_info").value;
    
    //alert(pos_pre);
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("candidate-result-chart").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/cand_result.php?pos_pre="+pos_pre,true);
        xmlhttp.send();

}


function cast_vote_check()
{
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if(xmlhttp.responseText == "redirect")
                    window.location = "cast_vote_page.php";
                else
                    document.getElementById("user_message_1").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/cast_voter_check.php",true);
        xmlhttp.send();

}


function candy_get()
{
    var cand_id = document.getElementById("cand_name").value;
    
    //alert(cand_id);
    
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("candidate-info-chart").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","process_page/cand_info_submit.php?cand_id="+cand_id,true);
        xmlhttp.send();
}