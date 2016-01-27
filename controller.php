
class Controller {

public function __invoke(Model $model) {
    $queryResults = $model->getUsersAndDob();
    $currentDate = today;
    foreach ($queryResults as $queryResult) {
        $age = $queryResult['dob'] - $currentDate;
        $user[] = [
            'name' => $queryResult['name'],
            'age' => $age ];
    }
    return new View(['user' = $user]
}