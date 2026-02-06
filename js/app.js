function generate(){
  var from = document.getElementById('from').value;
  var code_contry = document.getElementById('code_contry').value;
  var output = document.getElementById('num_list');

  output.value = "Generating...";

  var http = new XMLHttpRequest();
  http.open("POST", "num.php", true);
  http.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded; charset=UTF-8"
  );

  http.send(
    "from=" + encodeURIComponent(from) +
    "&code_contry=" + encodeURIComponent(code_contry)
  );

  http.onreadystatechange = function(){
    if(http.readyState === 4){
      output.value = http.responseText;
    }
  }
}

function copyAll(){
  var ta = document.getElementById('num_list');
  if(!ta.value.trim()){
    alert("Nothing to copy");
    return;
  }
  ta.select();
  document.execCommand("copy");
  alert("Copied ✅");
}

function downloadTxt(){
  var text = document.getElementById('num_list').value;
  if(!text.trim()){
    alert("Nothing to download");
    return;
  }

  var blob = new Blob([text], {type:"text/plain;charset=utf-8"});
  var url = URL.createObjectURL(blob);

  var a = document.createElement("a");
  a.href = url;
  a.download = "generated_numbers.txt";
  document.body.appendChild(a);
  a.click();
  a.remove();

  URL.revokeObjectURL(url);
}
