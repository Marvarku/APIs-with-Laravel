<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class StudentController extends Controller
{
    public function index()
    {
        
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://156.0.234.153:8888',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        $res = $client->get('/api/public/api/v1/students');
        $body = json_decode($res->getBody());
        $students = $body->data;
        return view('welcome')->with(["students" => $students]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)

    {
        $request->validate([
            'name'=>'required',
            'course'=>'required',
        
        ]);
        $student = [
            'name' => $request->name,
            'course' => $request->course,
            ];
            

            
            $client = new Client(["base_uri" => "http://156.0.234.153:8888"]);
            $options = [
            'form_params' => $student
            ];
            $response = $client->post("/api/public/api/v1/students", $options);
            
            return redirect()->to('students');
    }
    public function edit (Request $request){
        
        
        $client = new Client(["base_uri" => "http://156.0.234.153:8888"]);
        $response = $client->get("/api/public/api/v1/students/".$request->id);
        $body = json_decode($response->getBody());
        $student = $body->data;
        $student->id = $request->id;
        
        return view('edit')->with(['student' => $student]);
    }


    public function update(Request $request)
    {
        /*
        $client = new Client(["base_uri" => "http://156.0.234.153:8888"]);
        $response = $client->patch("/api/public/api/v1/students/".$request->id);
       // dd(response);
        */
        $request->validate([
            'name'=>'required',
            'course'=>'required',
        
        ]);
        $student = [
            'name' => $request->name,
            'course' => $request->course,
            ];
            
            $client = new Client(["base_uri" => "http://156.0.234.153:8888"]);
            $options = [
            'form_params' => $student
            ];
            $response = $client->patch("/api/public/api/v1/students/".$request->id, $options);
            
            return redirect()->to('students');
            
     
        
}


//public function patchDoctorService($facilityId, $doctorId, $doctorService)
 //{
    // $request = $this->client->patch(['facilities/{facilityId}/doctors/{doctorId}/services/{doctorServiceId}', 
    //['facilityId' => $facilityId, 'doctorId' => $doctorId, 'doctorServiceId' => $doctorService->getId()]], [], $this->serializer->serialize($doctorService,
    // 'json', SerializationContext::create()->setGroups(['patch'])));
     //** @var DoctorService $newDoctorService */
    // $newDoctorService = $this->authorizedRequest($request, DoctorService::class, DeserializationContext::create()->setGroups(['get']));
   //  return $newDoctorService;
// }





    public function delete(Request $request)
    {
        
            $client = new Client(["base_uri" => "http://156.0.234.153:8888"]);
            $response = $client->delete("/api/public/api/v1/students/".$request->id);
            
            return redirect()->to('students');
    }
}
