<?php

namespace App\Http\Controllers\Admin;

use App\Models\DapodikSync as ModelsDapodikSync;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DapodikSync extends Component
{
    public  $name, $ip_erapor, $ip_dapodik, $key, $npsn, $daposyncid;

    protected $rules = [
        'name' => 'required'
    ];

    public function mount()
    {
        $daposync = ModelsDapodikSync::all()[0];
        $this->daposyncid = $daposync->id;
        $this->name = $daposync->name;
        $this->ip_erapor = $daposync->ip_erapor;
        $this->ip_dapodik = $daposync->ip_dapodik;
        $this->key = $daposync->key;
        $this->npsn = $daposync->npsn;
    }

    public function render()
    {
        $daposync = ModelsDapodikSync::all();
        return view('admin.dapodik-sync', ['daposync' => $daposync]);
    }

    public function saveKoneksiDapodik()
    {

        $this->validate();

        ModelsDapodikSync::where('id', $this->daposyncid)->update([
            'name' => $this->name,
            'ip_erapor' => $this->ip_erapor,
            'ip_dapodik' => $this->ip_dapodik,
            'key' => $this->key,
            'npsn' => $this->npsn
        ]);

        $this->dispatchBrowserEvent('hide-form');
    }

    // public function getApiDapodik()
    // {
    //     $pengguna =  Http::acceptJson()->withToken($this->key)->get('http://'.$this->ip_dapodik.':5774/WebService/getSekolah?npsn='.$this->npsn);
    //     $collection = json_decode($pengguna);
    //     dd($collection->rows);
    // }
}
