<?php
/**
*
*/
class Main_model extends CI_Model
{
    function tanggal_indo($tgl, $a = 0)
    {
        $hari_array = array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
        $hr         = date('w', strtotime($tgl));
        $hari       = $hari_array[$hr];
        $tanggal    = substr($tgl, 8, 2);
        $bulan      = $this->getBulan(substr($tgl, 5, 2));
        $tahun      = substr($tgl, 0, 4);
        $hr_tgl     = "$hari, $tanggal $bulan $tahun";
        if($a > 0) {
            $hr_tgl     = "$tanggal $bulan $tahun";
        }
        return $hr_tgl;
    }

    function getBulan($bln)
    {
        switch ($bln){
            case '01':
                    return "Januari";
                    break;
            case '02':
                    return "Februari";
                    break;
            case '03':
                    return "Maret";
                    break;
            case '04':
                    return "April";
                    break;
            case '05':
                    return "Mei";
                    break;
            case '06':
                    return "Juni";
                    break;
            case '07':
                    return "Juli";
                    break;
            case '08':
                    return "Agustus";
                    break;
            case '09':
                    return "September";
                    break;
            case '10':
                    return "Oktober";
                    break;
            case '11':
                    return "November";
                    break;
            case '12':
                    return "Desember";
                    break;
        }
    }
    //global function
    function view_by_id($table='',$condition='',$row='row')
    {
        if($row == 'row') {
            if($condition) {
                return $this->db->where($condition)->get($table)->row();
            } else {
                return $this->db->get($table)->row();
            }
        } else if($row == 'result') {
            if($condition) {
                return $this->db->where($condition)->get($table)->result();
            } else {
                return $this->db->get($table)->result();
            }
        }
    }

    function process_data($table='', $data='', $condition='')
    {
        if($condition) {
            $this->db->where($condition)->update($table, $data);
        } else {
            $this->db->insert($table, $data);
        }
        return $this->db->affected_rows();
    }

    function delete_data($table='', $condition='')
    {
        $this->db->where($condition)->delete($table);
        return $this->db->affected_rows();
    }

    function view_data_pengajuan()
    {
        $this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('status != 9');
		return $this->db->get()->result();
    }

    function view_data_dikerjakan()
    {
        $this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('status = 1');
		return $this->db->get()->result();
    }

    function view_data_selesai()
    {
        $this->db->select('*');
		$this->db->from('pengaduan');
		$this->db->where('status = 9');
		return $this->db->get()->result();
    }

    function kondisi_jalan($value='')
    {
        $result='';
        if($value == 0) {
            $result = 'Perlu Perbaikan';
        } else if($value == 1) {
            $result = 'Mengkhawatirkan';
        }
        return $result;
    }
    //global function
}

?>
