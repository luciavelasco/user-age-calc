
class Model {

    public function getUsersAndDob() {
        $sql = 'SELECT age, dob
            FROM user
            LIMIT 12;';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result;
    }
}