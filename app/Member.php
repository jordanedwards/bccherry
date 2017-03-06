<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use Serverfireteam\Panel\ObservantTrait;

class Member extends Model {
	use ObservantTrait;
	
    protected $table = 'member';

    public function fullAddress()
    {
        $response = "";

        if ($this->address == ""){
            if ($this->city != ""){
                $response = $this->city;
            }
            if ($this->postal_code != ""){
                $response .= ", BC " . $this->postal_code;
            }

            return $response;
        }

        $response = $this->address;

        if ($this->city != ""){
            $response .= ", " . $this->city . " BC";
        }
        if ($this->postal_code != ""){
            $response .= " " . $this->postal_code;
        }

        return $response;
    }

    public function getCertifications($format)
    {
        $certifications = explode("|", $this->certifications);
        $output = [];

        foreach ($certifications as $key => $value){
            $record = Certification::where('id', $value)->first();
            if ($record){
                array_push($output, $record['name']);
            }
        }

        if ($format == 'string'){
            return implode(", ", $output);
        }

        return $output;
    }

    public function getFeatures($format)
    {
        $features = explode("|", $this->features);
        $output = [];

        foreach ($features as $key => $value){
            $record = Feature::where('id', $value)->first();
            if ($record){
                array_push($output, $record['name']);
            }
        }

        if ($format == 'string'){
            return implode(", ", $output);
        }

        return $output;
    }

    public function hasOrchardDescription()
    {
        if($this->orchard_description != NULL){
            return true;
        }
    }

    public function getVarieties($format)
    {
        $varieties = explode("|", $this->varieties);
        $output = [];

        foreach ($varieties as $key => $value){
            $record = Cherry::where('id', $value)->first();
            if ($record){
                array_push($output, $record['name']);
            }
        }

        if ($format == 'string'){
            return implode(", ", $output);
        }

        return $output;
    }

}
