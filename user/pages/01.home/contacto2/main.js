// Initialize Firebase (ADD YOUR OWN DATA)

var config = {
  apiKey: "AIzaSyAlx7S25lgprJBSn5erp2d9wXkc6c_DcaI",
  authDomain: "grav-cms-8c4a6.firebaseapp.com",
  databaseURL: "https://grav-cms-8c4a6.firebaseio.com",
  projectId: "grav-cms-8c4a6",
  storageBucket: "grav-cms-8c4a6.appspot.com",
  messagingSenderId: "861976101747",
  appId: "1:861976101747:web:d5fa456324d411d3"
};
firebase.initializeApp(config);

// Reference messages collection
var messagesRef = firebase.database().ref('messages');

// Listen for form submit
document.getElementById('contactForm').addEventListener('submit', submitForm);

// Submit form
function submitForm(e){
  e.preventDefault();

  // Get values
  var name = getInputVal('name');
  var company = getInputVal('company');
  var email = getInputVal('email');
  var phone = getInputVal('phone');
  var fecha = getInputVal('fecha');
  var genero = document.getElementById("genero");
  var option = genero.options[genero.selectedIndex].text; // busqueda del dato qeu se encuentra en el select
   genero = option; // dato del selec guardado y listo para enviar
  var estado = document.getElementById("estado");
  var optiones = estado.options[estado.selectedIndex].text; // busqueda del dato qeu se encuentra en el select
   estado = optiones; // dato del selec guardado y listo para enviar
  var message = getInputVal('message');

  // Save message
  saveMessage(name, company, email, phone,fecha,genero,estado, message);

  // Show alert
  document.querySelector('.alert').style.display = 'block';

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },3000);

  // Clear form
  document.getElementById('contactForm').reset();
}

// Function to get get form values
function getInputVal(id){
  return document.getElementById(id).value;
}
 
// Save message to firebase
function saveMessage(name, company, email, phone,fecha,genero,estado,message){
  var newMessageRef = messagesRef.push();
  newMessageRef.set({
    name: name,
    company:company,
    email:email,
    phone:phone,
    fecha:fecha,
    genero:genero,
    estado:estado,
    message:message
  });
}