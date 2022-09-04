//<!--

function validateForm()
{
    var nimi=document.forms["yhteydenotto"]["nimi"].value
    var puhelin=document.forms["yhteydenotto"]["puhelin"].value
    var sposti=document.forms["yhteydenotto"]["email"].value
    var viesti=document.forms["yhteydenotto"]["viesti"].value

    var nimi = nimi.replace(/^\s+|\s+$/g, '') ;
    var puhelin = puhelin.replace(/^\s+|\s+$/g, '') ;
    var sposti = sposti.replace(/^\s+|\s+$/g, '') ;
    var viesti = viesti.replace(/^\s+|\s+$/g, '') ;

    if (nimi=="")
    {
        alert("Kirjoita nimesi!");
        document.getElementById('nimi').focus();
        return false;
    }
    
    else if (nimi=="nimi:")
    {
        alert("Kirjoita nimesi!");
        document.getElementById('nimi').focus();
        return false;
    }

    else if (puhelin=="")
    {
        alert("Kirjoita puhelin numerosi!");
        document.getElementById('puhelin').focus();
        return false;
    }
    
    else if (puhelin=="puhelin:")
    {
        alert("Kirjoita puhelin numerosi!");
        document.getElementById('puhelin').focus();
        return false;
    }

    var e=document.forms["yhteydenotto"]["email"].value
    var atpos=e.indexOf("@");
    var dotpos=e.lastIndexOf(".");

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=e.length)
    {
        alert("Virheellinen e-mail osoite");
        document.getElementById('email').focus();
        return false;
    }


    else if (viesti=="")
    {
        alert("Kirjoita viestisi!");
        document.getElementById('viesti').focus();
        return false;
    }
    
    else if (viesti=="viesti:")
    {
        alert("Kirjoita viestisi!");
        document.getElementById('viesti').focus();
        return false;
    }
    
    
                  
}

//-->