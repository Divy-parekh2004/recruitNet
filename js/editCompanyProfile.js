let currentField = "";

function openSocialEdit(field){
    currentField = field;

    let value = document.getElementById(field).value;
    document.getElementById("socialInput").value = value;

    document.getElementById("socialModal").style.display = "flex";
}

function closeSocialEdit(){
    document.getElementById("socialModal").style.display = "none";
}

function saveSocialEdit(){
    let newValue = document.getElementById("socialInput").value;

    document.getElementById(currentField).value = newValue;
    closeSocialEdit();
}