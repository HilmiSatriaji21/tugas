<html>
     <head><title>Form Penggajian</title></head>
     <body>

     <FORM ACTION ="a.php" METHOD="POST" NAME="input">
           Nama Anda : <input type="text" name="nama"><br>
           <br>
           <br>
           Nip : <input type ="number" name="NIP"><br>
           <br>
           <br>
           Jenis Kelamin : 
           <br><input type="radio" name="jk" value="Laki-Laki" checked>
            Laki-Laki<br>
           <input type="radio" name="jk" value="Perempuan" checked>
            Perempuan<br>
            <br>
            <br>
           Alamat : <textarea name="alamat" cols="40"
            rows="5"></textarea><br>
            <br>
            <br>
           <tr><td>Status : </td></td><select name="status" required>
               <option value="Menikah">menikah</option>
               <option value="Belum Menikah">belum_menikah</option>
               </select></td></td>
               <br>
               <br>
               <tr>
          <tr><td>Jabatan : </td><td><select name="jabatan" required>
               <option value="HRD">hrd</option>
               <option value="Manager">manager</option>
               <option value="Staff">staff</option>
               <option value="Karyawan">karyawan</option>
               </select></td></td>
               <br>
               <br>
               </tr>
           Potongan : 
           <br><input type="checkbox" name="kartu1" value="bpjs"
            checked> BPJS<br>
           <input type="checkbox" name="kartu2" value="koperasi">
            Koperasi<br>
           <input type="checkbox" name="kartu3" value="jamsostek">
            Jamsostek<br>
            <br>
           <tr><td>Golongan : </td><td><select name="golongan" required><br>
               <option value="A1">a1</option><br>
               <option value="A2">a2</option><br>
               <option value="A3">a3</option><br>
               </option></td></td>
               <br><hr>            
            <br><input type="submit" name="input" value="input"></br>
            </form>
     </body>
</html>