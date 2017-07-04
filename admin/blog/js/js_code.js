// Maian Weblog v4.0
// Admin JS functions

// Delete confirmation box..
function delete_confirm(txt,url) {
 var txt;
 var url;
 var confirmSub = confirm(txt);
 if (confirmSub){
  window.location = url;
 }else{
  return false;
 }
}

// Toggle Divs..
function toggle_box(id) {
 var e = document.getElementById(id);
 if(e.style.display == 'none')
 e.style.display = 'block';
 else
 e.style.display = 'none';
}

// Submit confirmation box
function submit_confirm(txt) {
 var txt;
 var confirmSub = confirm(txt);
 if (confirmSub) {
  return true;
 }else{ 
  return false;
 }
}

// Checkbox select all..
function selectAll() {
 for (var i=0;i<document.MyForm.elements.length;i++) {
  var e = document.MyForm.elements[i];
    if ((e.name != 'log') && (e.type=='checkbox')){
      e.checked = document.MyForm.log.checked;
    }
 }
}

// Generic pop up window..
function popWindow(URL,LEFT,TOP,WIDTH,HEIGHT,SCROLLBARS,RESIZE) {
 day = new Date();
 id = day.getTime();
 eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=" + SCROLLBARS + ",location=0,statusbar=0,menubar=0,left=" + LEFT + ",top=" + TOP + ",screenX=0,screenY=0,resizable=" + RESIZE + ",width=" + WIDTH + ",height=" + HEIGHT + "');");
}
