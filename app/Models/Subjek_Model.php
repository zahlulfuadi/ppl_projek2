<?php

namespace App\Models;

use CodeIgniter\Model;

class Subjek_Model extends Model
{

    public function getSubjekByIdGuru($id_guru)
    {
        $result = $this->db->table('guru_subjek')
            ->where('guru_subjek.id_guru', $id_guru)
            ->join('subjek', 'guru_subjek.id_subjek = subjek.id')
            ->get()
            ->getResultArray();

        return $result;
    }

    public function getTingkatByIdGuru($id_guru)
    {
        $id_tingkat = $this->db->table('guru_subjek')
            ->select('id_tingkat')
            ->where('guru_subjek.id_guru', $id_guru)
            ->get()
            ->getResultArray();

        $id = [];
        foreach ($id_tingkat as $key => $value) {
            $exp = explode(",", $value['id_tingkat']);
            $id = array_merge($id, $exp);
        }

        $nama_tingkat = $this->db->table('tingkat')
            ->whereIn('id', $id)
            ->get()
            ->getResultArray();

        $result = [];
        foreach ($nama_tingkat as $value) {
            array_push($result, $value['jenjang'] . " Kelas " . $value['kelas']);
        }

        return $result;
    }

    public function detailMapelByIdGuru($id_guru)
    {
        $result = $this->db->table('guru_subjek')
            ->where('guru_subjek.id_guru', $id_guru)
            ->join('subjek', 'guru_subjek.id_subjek = subjek.id') //untuk cantumin nama subjek
            ->join('mapel', 'subjek.id_mapel = mapel.id') //untuk cantumin nama mapel
            ->get()
            ->getResultArray();

        return $result;
    }
}
