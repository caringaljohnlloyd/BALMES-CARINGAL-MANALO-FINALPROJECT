<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table            = 'room';
    protected $primaryKey       = 'room_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['image','name', 'price','bed','bath','description'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function searchInRoom($query)
    {
        $result = $this->db->table('room')
            ->groupStart()
                ->like('name', $query)
                ->orLike('description', $query)
                ->orLike('price', $query)
                ->orLike('bed', $query)
                ->orLike('bath', $query)
            ->groupEnd()
            ->get()
            ->getResultArray();
    
        // Loop through the result set to find the matched word
        foreach ($result as &$record) {
            if (stripos($record['name'], $query) !== false) {
                $record['matchedWord'] = $record['name'];
            } elseif (stripos($record['description'], $query) !== false) {
                $record['matchedWord'] = $record['description'];
            } elseif (stripos($record['price'], $query) !== false) {
                $record['matchedWord'] = $record['price'];
            } elseif (stripos($record['bed'], $query) !== false) {
                $record['matchedWord'] = $record['bed'];
            } elseif (stripos($record['bath'], $query) !== false) {
                $record['matchedWord'] = $record['bath'];
            }
        }
    
        return $result;
    }
    
    

}
