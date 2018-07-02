$(document).ready(function(){
 
$('#modal-konfirmasi').on('show.bs.modal', function (event) {
var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
 
// Untuk mengambil nilai dari data-id="" yang telah kita tempatkan pada link hapus
var id = div.data('id')
 
var modal = $(this)
 
// Mengisi atribut href pada tombol ya yang kita berikan id hapus-true pada modal .

modal.find('#hapus-true-data').attr("href","?f1=rasiolancar&f2=rasiolancar&id_delete="+id);
modal.find('#hapus-true-data1').attr("href","?f1=rasiocepat&f2=rasiocepat&id_delete="+id);
modal.find('#hapus-true-data2').attr("href","?f1=rasiokas&f2=rasiokas&id_delete="+id);
modal.find('#hapus-true-data3').attr("href","?f1=debtratio&f2=debtratio&id_delete="+id);
modal.find('#hapus-true-data4').attr("href","?f1=debtequity&f2=debtequity&id_delete="+id);
modal.find('#hapus-true-data5').attr("href","?f1=profit&f2=profit&id_delete="+id);
modal.find('#hapus-true-data6').attr("href","?f1=roi&f2=roi&id_delete="+id);
modal.find('#hapus-true-data7').attr("href","?f1=roe&f2=roe&id_delete="+id);
})
 
});
