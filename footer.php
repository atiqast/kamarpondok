<div class="row"></div>
<hr/>
<footer class="text-center">
        <strong>Santri</strong>Developer | Design by Team
        <h6><em><small>&copy; Copyright</small></em> 2019</h6>
</footer>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/jquery.autocomplete.min.js"></script>
<script src="bootstrap/js/jquery.dataTables.min.js"></script>
<script src="bootstrap/js/dataTables.bootstrap.min.js"></script>
<script src="bootstrap/js/pdfmake.min.js"></script>
<script src="bootstrap/js/vfs_fonts.js"></script>
<script src="bootstrap/js/dataTables.buttons.min.js"></script>
<script src="bootstrap/js/buttons.bootstrap.min.js"></script>
<script src="bootstrap/js/buttons.html5.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/fungsi.js"></script>

<script>
$(document).ready(function() {	
	//membuat datattables
	$('#laporan').DataTable({
        dom:'Bfrtip',
        buttons:[
                //{extend:'csvHtml5', footer:true},
                {extend:'pdfHtml5',
                footer:true,
                title:'Laporan <?=$msg?> Syahriyah',
                messageTop:'Laporan dari <?=$awal." sampai ".$akhir?>',
                messageBottom:''}
        ],
        "footerCallback": function(row,data,start,end,display){
                var api = this.api(), data;
                // diubah ke bilangan bulat untuk menemukan total
                var intVal = function(i){
                        return typeof i === 'string' ?
                        i. replace(/[\$,]/g, '')*1:
                        typeof i === 'number' ?
                                i : 0;
                };

                // menghitung total yang sudah bayar
                var jumlah = api
                        .column(5)
                        .data()
                        .reduce(function(a,b){
                                return intVal(a) + intVal(b);
                },0);

                // total perhalaman
                var totalHal = api
                        .column(5,{page:'current'})
                        .data()
                        .reduce(function(a,b){
                                return intVal(a)+intVal(b);
                        })
                // rubah footer
                $(api.column(5).footer()).html('Hal. ini : Rp'+totalHal+'<br> Semua : Rp'+jumlah);
        }
	});	
});	
</script>
</body>
</html>