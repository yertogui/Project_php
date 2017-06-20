/* 
Clase donde estan las funciones que validan los campos de texto
 */

    
/*Valida los campos de texto de Insert Park*/
function validateFieldsIP(){
  

    var namePark = document.getElementById('txtPark');
    var location = document.getElementById('txtLocation');
    var contact = document.getElementById('txtContact');
    var latitude = document.getElementById('txtLatitude');
    var longitude = document.getElementById('txtLongitude');
    var description = document.getElementById('txtDescription');
    var emptyName = false, emptyLocation = false, emptyContact = false, 
    emptyLatitude = false, emptyLongitude = false, emptyDescription = false;
    
    if(namePark.value.length < 2){//el parque estÃ¡ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
    if(location.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorLocation').style.visibility = "visible";
        emptyLocation = true;
    }else{
        document.getElementById('msgErrorLocation').style.visibility = "hidden";
    }//end else
    
      if(contact.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorContact').style.visibility = "visible";
        emptyContact = true;
    }else{
        document.getElementById('msgErrorContact').style.visibility = "hidden";
    }//end else
     
      if(latitude.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorLatitude').style.visibility = "visible";
        emptyLatitude = true;
    }else{
        document.getElementById('msgErrorLatitude').style.visibility = "hidden";
    }//end else
    
    if(longitude.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorLongitude').style.visibility = "visible";
        emptyLongitude = true;
    }else{
        document.getElementById('msgErrorLongitude').style.visibility = "hidden";
    }//end else
    
    if(description.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyDescription = true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
    }//end else
    
   if(emptyContact === true || emptyDescription === true || emptyLatitude === true || 
        emptyLocation === true || emptyLongitude === true || emptyName === true){
        return false;
    }else{
        return true;
    }
}//end validateFieldsIP

/*metodo que valida que el campo de nombre estï¿½ lleno*/
function validateName(){
    
    var namePark = document.getElementById('txtName');
    
    if(namePark.value.length < 2){//el parque estï¿½ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        return false;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
        return true;
    }//end else 
}//end validateName

/*Metodo que valida los text fields de Update Park*/
function validateFieldsUP(){
    
    var namePark = document.getElementById('txtName');
    var location = document.getElementById('txtLocation');
    var contact = document.getElementById('txtContact');
    var description = document.getElementById('txtDescription');
    var emptyName = false, emptyLocation = false, emptyContact = false, 
    emptyDescription = false;
    
    if(namePark.value.length < 2){//el parque estï¿½ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
    if(location.value.length < 2){//La locacion estï¿½ vacia
        document.getElementById('msgErrorLocation').style.visibility = "visible";
        emptyLocation = true;
    }else{
        document.getElementById('msgErrorLocation').style.visibility = "hidden";
    }//end else
    
      if(contact.value.length < 2){//La locacion estï¿½ vacia
        document.getElementById('msgErrorContact').style.visibility = "visible";
        emptyContact = true;
    }else{
        document.getElementById('msgErrorContact').style.visibility = "hidden";
    }//end else
     
    if(description.value.length < 2){//La locacion estï¿½ vacia
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyDescription = true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
    }//end else
    
    if(emptyContact === true || emptyDescription === true ||  
        emptyLocation === true ||  emptyName === true){
        return false;
    }else{
        return true;
    }
}//end validateFieldsUP

/*Valida los campos de texto de Insert Element*/
function validateFieldsIE(){
    console.log("Elements!!!!!!!");

    var nameElement = document.getElementById('txtNameElement');
    var description = document.getElementById('txtDescription');
    var park = document.getElementById('txtPark');
    
    var emptyName = false, emptyDescription = false, emptyPark = false;
    
    if(nameElement.value.length < 2){//el parque estÃ¡ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
    if(description.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyDescription = true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
    }//end else
    
      if(park.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark = true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
    }//end else
     
   
   
   if(emptyName === true || emptyDescription === true || emptyPark === true){
        return false;
        console.log("false");
    }else{
        return true;
    }
}//end validateFieldsIE

/*Metodo que valida los textfields de Log in*/
function validateLogIn(){
    
    var namePark = document.getElementById('txtLoginUser');
    var password = document.getElementById('txtLoginPassword');
   
    var emptyUser = false, emptyPassword = false;
    
    if(namePark.value.length < 2){//el parque está vacio
        document.getElementById('msgErrorUser').style.visibility = "visible";
        emptyUser = true;
    }else{
        document.getElementById('msgErrorUser').style.visibility = "hidden"; 
    }//end else 
      
    if(password.value.length < 2){//La locacion está vacia
        document.getElementById('msgErrorPassword').style.visibility = "visible";
        emptyPassword = true;
    }else{
        document.getElementById('msgErrorPassword').style.visibility = "hidden";
    }//end else
    
    if(emptyPassword === true || emptyUser === true){
        return false;
    }else{
        return true;
    }
}//end validateLogIn

function validateNameAndPark(){
    
    var name = document.getElementById('txtName');
    var park = document.getElementById('txtParkName');
    
     var emptyName = false, emptyPark = false;
     
    if(name.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName= true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
        emptyName= true;
    }//end else 
    
    if(park.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark= true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
        emptyPark= true;
    }//end else 
    
     if(emptyName === true || emptyPark === true){
        return false;
    }else{
        return true;
    }
}//end validateNameAndPark

function validateSearchRanger(){
    
    var name = document.getElementById('txtUserName');
    
     
    if(name.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorUser').style.visibility = "visible";
        return false;
    }else{
        document.getElementById('msgErrorUser').style.visibility = "hidden";
        return true;
    }//end else 
    
   
}//end validateSearchRanger

function validateUR(){
    
    var user = document.getElementById('txtUserName');
    var name = document.getElementById('txtName');
    var passwordNew = document.getElementById('txtPasswordNew');
    var password = document.getElementById('txtPassword');
    var park = document.getElementById('txtPark');
    
     var emptyName = false,emptyUser = false, emptyPark = false, emptyPasswordNew = false, emptyPassword = false;
     
    if(user.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorUser').style.visibility = "visible";
        emptyUser= true;
    }else{
        document.getElementById('msgErrorUser').style.visibility = "hidden";
        emptyUser= true;
    }//end else 
    
    if(name.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName= true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
        emptyName= true;
    }//end else 
    
    if(park.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark= true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
        emptyPark= true;
    }//end else 
    
    if(passwordNew.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPasswordNew').style.visibility = "visible";
        emptyPasswordNew= true;
    }else{
        document.getElementById('msgErrorPasswordNew').style.visibility = "hidden";
        emptyPasswordNew= true;
    }//end else 
    
    if(password.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPassword').style.visibility = "visible";
        emptyPassword= true;
    }else{
        document.getElementById('msgErrorPassword').style.visibility = "hidden";
        emptyPassword= true;
    }//end else 
    
   
     if(emptyUser === true ||emptyName === true || emptyPark === true || emptyPassword === true || emptyPasswordNew === true ){
        return false;
    }else{
        return true;
    }
}//end validateUE

function validateIR(){
    console.log("ENTRA");
    var name = document.getElementById('txtName');
    var username = document.getElementById('txtUser');
    var password = document.getElementById('txtPassword');
    var parkName = document.getElementById('txtPark');
    var parkID = document.getElementById('txtID');
    var emptyName = false, emptyPark = false, emptyUser = false, emptyPassword = false,
    emptyID = false;
    
    if(name.value.length < 2){// estÃ¡ vacio
        document.getElementById('msgErrorName2').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName2').style.visibility = "hidden";
    }//end else 
      
     
    if(parkName.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark = true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
    }//end else
    
    if(parkID.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorID').style.visibility = "visible";
        emptyID = true;
    }else{
        document.getElementById('msgErrorID').style.visibility = "hidden";
    }//end else
    
    if(password.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorPassword2').style.visibility = "visible";
        emptyPassword = true;
    }else{
        document.getElementById('msgErrorPassword2').style.visibility = "hidden";
    }//end else
    
    if(username.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorUser2').style.visibility = "visible";
        emptyUser = true;
    }else{
        document.getElementById('msgErrorUser2').style.visibility = "hidden";
    }//end else
    
   if(emptyName === true || emptyPark === true || emptyID === true || emptyPassword === true
           || emptyPassword === true){
        return false;
    }else{
        return true;
    }
}//end validateIR

function validateDE(){
    
    var name = document.getElementById('txtElement');
    var park = document.getElementById('txtPark');
    
     var emptyName = false, emptyPark = false;
     
    if(name.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName= true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
        emptyName= true;
    }//end else 
    
    if(park.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark= true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
        emptyPark= true;
    }//end else 
    
     if(emptyName === true || emptyPark === true){
        return false;
    }else{
        return true;
    }
}//end validateName

function validateUE(){
    
    var name = document.getElementById('txtName');
    var park = document.getElementById('txtParkName');
    var description = document.getElementById('txtDescription');
    
     var emptyName = false, emptyPark = false, emptytDescription = false;
     
    if(name.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName= true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
        emptyName= true;
    }//end else 
    
    if(park.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark= true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
        emptyPark= true;
    }//end else 
    
    if(description.value.length < 2){//el parque est&#65533; vacio
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyPark= true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
        emptyPark= true;
    }//end else 
    
     if(emptyName === true || emptyPark === true || emptytDescription === true){
        return false;
    }else{
        return true;
    }
}//end validateUE

/*Valida los campos de texto de Insert Flora*/
function validateFieldsIF(){
  
    var floraName = document.getElementById('txtFlora');
    var abundance = document.getElementById('txtAbundance');
    var floweringPeriod = document.getElementById('txtFloweringPeriod');
    var park = document.getElementById('txtPark');
    var description = document.getElementById('txtDescription');
    var emptyName = false, emptyAbundance = false, emptyFloweringPeriod = false, 
    emptyPark = false, emptyDescription = false;
    
    if(floraName.value.length < 2){// estÃ¡ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
    if(abundance.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorAbundance').style.visibility = "visible";
        emptyLocation = true;
    }else{
        document.getElementById('msgErrorAbundance').style.visibility = "hidden";
    }//end else
    
      if(floweringPeriod.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorFloweringPeriod').style.visibility = "visible";
        emptyFloweringPeriod = true;
    }else{
        document.getElementById('msgErrorFloweringPeriod').style.visibility = "hidden";
    }//end else
     
      if(park.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark = true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
    }//end else
    
    if(description.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyDescription = true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
    }//end else
    
   if(emptyAbundance === true || emptyDescription === true || emptyFloweringPeriod === true || 
        emptyName === true || emptyPark === true){
        return false;
    }else{
        return true;
    }
}//end validateFieldsIF

/*Valida los campos de texto de Actualizar Flora*/
function validateFieldsUF(){
  

    var floraName = document.getElementById('txtFlora');
    var abundance = document.getElementById('txtAbundance');
    var floweringPeriod = document.getElementById('txtFloweringPeriod');
    var park = document.getElementById('txtPark');
    var description = document.getElementById('txtDescription');
    var emptyName = false, emptyAbundance = false, emptyFloweringPeriod = false, 
    emptyPark = false, emptyDescription = false;
    
    if(floraName.value.length < 2){// estÃ¡ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
    if(abundance.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorAbundance').style.visibility = "visible";
        emptyLocation = true;
    }else{
        document.getElementById('msgErrorAbundance').style.visibility = "hidden";
    }//end else
    
      if(floweringPeriod.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorFloweringPeriod').style.visibility = "visible";
        emptyFloweringPeriod = true;
    }else{
        document.getElementById('msgErrorFloweringPeriod').style.visibility = "hidden";
    }//end else
     
      if(park.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark = true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
    }//end else
    
    if(description.value.length < 2){//La locacion estÃ¡ vacia
        document.getElementById('msgErrorDescription').style.visibility = "visible";
        emptyDescription = true;
    }else{
        document.getElementById('msgErrorDescription').style.visibility = "hidden";
    }//end else
    
   if(emptyAbundance === true || emptyDescription === true || emptyFloweringPeriod === true || 
        emptyName === true || emptyPark === true){
        return false;
    }else{
        return true;
    }
}//end validateFieldsUF

function validateFieldsDF(){
  
console.log("ENTRA");
    var floraName = document.getElementById('txtFlora');
    var parkName = document.getElementById('txtPark');
    var emptyName = false, emptyPark = false;
    
    if(floraName.value.length < 2){// estÃ¡ vacio
        document.getElementById('msgErrorName').style.visibility = "visible";
        emptyName = true;
    }else{
        document.getElementById('msgErrorName').style.visibility = "hidden";
    }//end else 
      
     
      if(parkName.value.length < 2){//estÃ¡ vacia
        document.getElementById('msgErrorPark').style.visibility = "visible";
        emptyPark = true;
    }else{
        document.getElementById('msgErrorPark').style.visibility = "hidden";
    }//end else
    
    
   if(emptyName === true || emptyPark === true){
        return false;
    }else{
        return true;
    }
    
}//end validateDF
