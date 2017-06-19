//$('div.alert').not('.alert-important').delay(30).slideUp(3);

$(document).ready(function(){
	//alert Sliding
	$('div.alert').not('.alert-important').delay(3000).slideUp(30);

	//Hapus Select dengan empty value
	$("#form-pencarian").submit(function(){
		$id("#id_kelas option[value='']")
		.attr("disabled","disabled");
		$("#jenis_kelamin option[value='']")
		.attr("disabled", "disabled");

		//Pastikan Route submit masih diteruskan.
		return true;
	});
});