namespace App\Utilities\InternshipFilters;
use App\Utilities\FilterContract;

class Category implements FilterContract{
    protected $query;

    public function __construct($query){
        $this->query = $query;
    }

    public function handle($value): void{
        $this->query->where('category_id', $value);
    }
}
