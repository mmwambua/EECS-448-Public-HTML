function change(){
  var rb=document.getElementById('RedBorder').value;
  var gb=document.getElementById('GreenBorder').value;
  var bb=document.getElementById('BlueBorder').value;
  var rg=document.getElementById('RedBackground').value;
  var gg=document.getElementById('GreenBackground').value;
  var bg=document.getElementById('BlueBackground').value;
  var thergbBackground = "rgb(" + rg + "," + gg + "," + bg + ")";
  document.getElementById('paragraph').style.background=thergbBackground;
  var bw=document.getElementById('bw').value;
  document.getElementById('paragraph').style.borderWidth = bw + "px";
  var thergbBorder = "rgb(" + rb + "," + gb + "," + bb + ")";
  document.getElementById('paragraph').style.borderColor=thergbBorder;
}
