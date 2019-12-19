var tombol = document.getElementById('tombol-cari');
var script = document.getElementById('script-key');

tombol.addEventListener('click', function(){
		alert('tombol berfungsi');
});

script.addEventListener('keyup', function(){
	alert('script berfungsi');
	console.log(script.value);
});
