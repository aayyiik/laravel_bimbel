<html>
    <body>
        
        <script>
            let counter = 1
            $('#addButton').click(function(){
                counter++
        
                let newInputan = '<div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Bab</label><div class="col-sm-12 col-md-10"><select class="custom-select col-12" name="id_bab[]"><option selected="">--Pilih--</option>@foreach ($bab as $bd)<option value="{{ $bd->id }}">{{ $bd->nama_bab }}</option>@endforeach</select></div></div><div class="form-group row"><label class="col-sm-12 col-md-2 col-form-label">Keterangan</label><div class="col-sm-12 col-md-10"><textarea class="form-control" type="text" name="keterangan[]"></textarea></div></div>' 
            $('#tambah_inputan').append(newInputan)
            });
        
            $('#removeButton').click(function(){
                
                $('#hapus').remove()
                counter--
            });
               
        </script> 
           
    </body>
</html>