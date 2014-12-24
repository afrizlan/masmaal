<?php

class db_sales_act{

	var $host;
	var $user;
	var $pass;
	var $dbnm;
	var $db;
	
	function __construct($host,$user,$pass,$dbnm){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbnm = $dbnm;
	}
	
	function _connect(){
		$this->db = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbnm,$this->db);
	}
	
		function get_data(){
			
			$this->_connect();
			
			$res = mysql_query('
				SELECT 
				* 
				FROM 
				pegawai
				ORDER BY 
				SALES_ID
				DESC'
			);
			
			return $res;
			
		}
		
		function update_data($data){
		
			$this->_connect();
		
			$sql = '
				update
				pegawai
				set
				SALES_ID			="'.$data['SALES_ID'].'",
				NO_KTP_PEGAWAI		="'.$data['NO_KTP_PEGAWAI'].'",	
				NAMA_PEGAWAI		="'.$data['NAMA_PEGAWAI'].'",
				USERNAME_PEGAWAI	="'.$data['USERNAME_PEGAWAI'].'",
				PASSWORD_PEGAWAI    ="'.$data['PASSWORD_PEGAWAI'].'",
				TEMPAT_LAHIR	    ="'.$data['TEMPAT_LAHIR'].'",
				TANGGAL_LAHIR	    ="'.$data['TANGGAL_LAHIR'].'",
				HAK_AKSES_PEGAWAI	="'.$data['HAK_AKSES_PEGAWAI'].'",
				STATUS_PEGAWAI		="'.$data['STATUS_PEGAWAI'].'",
				PENDIDIKANTERAKHIR	="'.$data['PENDIDIKANTERAKHIR'].'",
				ALAMAT_PEGAWAI		="'.$data['ALAMAT_PEGAWAI'].'",
				NO_TELP_PEGAWAI		="'.$data['NO_TELP_PEGAWAI'].'",
				HANDPHONE_PEGAWAI	="'.$data['HANDPHONE_PEGAWAI'].'"
				where
					SALES_ID="'.$data['id'].'"
				
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
		function set_data($data){
		
			$this->_connect();
		
			$sql = '
				INSERT 
				INTO
				pegawai
				(
					SALES_ID,
					NO_KTP_PEGAWAI,
					NAMA_PEGAWAI,
					USERNAME_PEGAWAI,
					PASSWORD_PEGAWAI,
					TEMPAT_LAHIR,
					TANGGAL_LAHIR,
					HAK_AKSES_PEGAWAI,
					STATUS_PEGAWAI,
					PENDIDIKANTERAKHIR,
					ALAMAT_PEGAWAI,
					NO_TELP_PEGAWAI,
					HANDPHONE_PEGAWAI
				)
				VALUES
				(
				"'.$data['SALES_ID'].'",
				"'.$data['NO_KTP_PEGAWAI'].'",	
				"'.$data['NAMA_PEGAWAI'].'",
				"'.$data['USERNAME_PEGAWAI'].'",
				"'.$data['PASSWORD_PEGAWAI'].'",
				"'.$data['TEMPAT_LAHIR'].'",
				"'.$data['TANGGAL_LAHIR'].'",
				"'.$data['HAK_AKSES_PEGAWAI'].'",
				"'.$data['STATUS_PEGAWAI'].'",
				"'.$data['PENDIDIKANTERAKHIR'].'",
				"'.$data['ALAMAT_PEGAWAI'].'",
				"'.$data['NO_TELP_PEGAWAI'].'",
				"'.$data['HANDPHONE_PEGAWAI'].'"
				)
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
		function delete_data($id){
		
			$this->_connect();
			mysql_query('
			delete from 
			pegawai
			where 
			SALES_ID='.$id);
			
		
		}
		
		function set_data_pelanggan($data){
		
			$this->_connect();
		
			$sql = '
				INSERT 
				INTO
				master_pelanggan
				(
					ACCOUNT_ID,
					SALES_ID,
					FULL_NAME,
					STREET,
					EXTENTION_ADDRESS,
					HOUSE_NUMBER,
					CITY,
					ID_POWER_SUPPLY
				)
				VALUES
				(
					"'.$data['ACCOUNT_ID'].'",
					"'.$data['SALES_ID'].'",
					"'.$data['FULL_NAME'].'",
					"'.$data['STREET'].'",
					"'.$data['EXTENTION_ADDRESS'].'",
					"'.$data['HOUSE_NUMBER'].'",
					"'.$data['CITY'].'",
					"'.$data['ID_POWER_SUPPLY'].'"
				)
			';
			
			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
		function get_data_pelanggan(){
			
			$this->_connect();
			
			$res = mysql_query('
			SELECT 
			* 
			FROM 
			master_pelanggan
			ORDER BY 
			ACCOUNT_ID
			DESC');
			
			return $res;
			
		}
		
		function delete_data_pelanggan($id){
		
			$this->_connect();
			
			mysql_query('
			delete 
			from 
			master_pelanggan
			where 
			SALES_ID='.$id
			);
	
		
		}
		
		function update_data_pelanggan($data){
		
			$this->_connect();
		
			$sql = '
				update
				master_pelanggan
				set
				    ACCOUNT_ID 			="'.$data['ACCOUNT_ID'].'",
					SALES_ID   			="'.$data['SALES_ID'].'",
					FULL_NAME  			="'.$data['FULL_NAME'].'",
					STREET				="'.$data['STREET'].'",
					EXTENTION_ADDRESS	="'.$data['EXTENTION_ADDRESS'].'",
					HOUSE_NUMBER		="'.$data['HOUSE_NUMBER'].'",
					CITY				="'.$data['CITY'].'",
					ID_POWER_SUPPLY		="'.$data['ID_POWER_SUPPLY'].'"
					
				where
					ACCOUNT_ID="'.$data['ACCOUNT_ID'].'"
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
		/* function set_data_fact_report($data){
		
			$this->_connect();
		
			$sql = '
				INSERT 
				INTO
				fact_report_customer
				(
					SALES_ID
					ACCOUNT_ID
					
				)
				VALUES
				(
					"'.$data['nama_produk'].'",
					"'.$data['kuantitas'].'",
					"'.$data['harga'].'",
					"'.$data['id_kategori'].'",
					"'.$data['lokasi'].'",
					"'.$data['deskripsi'].'",
					"'.$data['id_pengguna'].'",
					"'.$data['foto_produk'].'",
					now()
				)
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
		
		function get_data_produk($id_pengguna){
			
			$this->_connect();
			
			$res = mysql_query('
			SELECT 
			* 
			FROM 
			data_produk 
			where 
			id_pengguna='.$id_pengguna.''
			);
			
			return $res;
			
			 
			
		}
		
		function delete_data_produk($id){
		
			$this->_connect();
			
			mysql_query('
			delete from 
			data_produk 
			where id_produk='.$id);
			
			
		
		}
		
		function delete_data_manpro($id){
			
			$this->_connect();
			
			mysql_query('
			delete from 
			data_produk 
			where 
			id_produk='.$id);
			
			echo "<script>window.location='manajemen_produk_user.php'</script>";
		
		}
		
		function update_data_produk($data){
		
			$this->_connect();
		
			$sql = '
				update
				data_produk
				set
					nama_produk="'.$data['nama_produk'].'",
					kuantitas="'.$data['kuantitas'].'",
					harga="'.$data['harga'].'",
					id_kategori="'.$data['id_kategori'].'",
					lokasi="'.$data['lokasi'].'",
					deskripsi_produk="'.$data['deskripsi'].'",
					foto_produk="'.$data['foto_produk'].'"
				where
					id_produk="'.$data['id'].'"
				
			';

			$result = mysql_query($sql);
			return $result;
			
			$this->_close();
		}
			
		function get_data_manpro(){
			
			$this->_connect();
			
			$res = mysql_query('
			SELECT 
			* 
			FROM 
			data_produk,
			data_pengguna 
			where 
			data_produk.id_pengguna = data_pengguna.id_pengguna'
			); */
			
			/* while($data=mysql_fetch_array($res)){?>
			<tr>
			<td><input value="<?php $id = $data['id_produk']; ?>"type="checkbox"></td>
			<td><?php echo $data['nama_produk']; ?></td>
			<td><?php echo $data['tgl_ditambahkan']; ?></td>
			<td><?php echo $data['nama_pengguna']; ?></td>
			<?php */
		/* 	$tipe=mysql_query('select * from pegawai where SALES_ID='.$data['SALES_ID']);
			$id_tipe=mysql_fetch_array($tipe);
			//echo $id_tipe['id_tipe_pengguna'];
			if($HAK_AKSES_PEGAWAI=1){
				$nama_tipe="admin";
			}
			else{
				$nama_tipe="member";
			}
			 */
			//echo $nama_tipe;
			/* ?>
			<td>
			<a href="../<?php echo $nama_tipe; ?>/edit_produk.php?edit=<?php echo $id; ?>">
			<img src="../view/images/icn_edit.png" title="Edit" type="image">
			<a href="../<?php echo $nama_tipe; ?>/manajemen_produk_user.php?delete=<?php echo $id; ?>" onClick="return confirm('Anda yakin ingin menghapus Produk ini?')">
			<img src="../view/images/icn_trash.png" title="Trash" type="image"></a>
			</form>
			</td>
			<?php 
			
			
		*/
		
}