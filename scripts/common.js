// JavaScript Document


function MakeLink()

{
    varID = "sales";

    myElem = document.getElementById(varID);
    var arr = myElem.href.split('#');

    var emailAddress = varID + '@' + arr[arr.length-1];

    myElem.href = 'mailto:' + emailAddress;
}


  function MakeLinkCareers()

{
    varID = "careers";

    myElem = document.getElementById(varID);
    var arr = myElem.href.split('#');

    var emailAddress = varID + '@' + arr[arr.length-1];

    myElem.href = 'mailto:' + emailAddress;
}


function MakeLinkCommunity()

{
    varID = "community";

    myElem = document.getElementById(varID);
    var arr = myElem.href.split('#');

    var emailAddress = varID + '@' + arr[arr.length-1];

    myElem.href = 'mailto:' + emailAddress;
}

