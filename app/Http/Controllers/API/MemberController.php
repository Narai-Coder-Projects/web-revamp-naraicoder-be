<?php

namespace App\Http\Controllers\API;

use App\Constants\HttpStatusCodes;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\MemberResource;
use App\Models\Member;
use Illuminate\Http\Request;


class MemberController extends Controller
{

    public function index(Request $request)
    {
        try {
            $query = Member::query();
            $searchTerm = $request->input('search');

         

            if (!empty($searchTerm)) {
                $query->where('full_name', 'LIKE', '%' . $searchTerm . '%');
            }

            $members = $query->paginate(10);
            $last_page =  $members->lastPage();
            $current_page = $members->currentPage();


            $formattedMembers = MemberResource::collection($members);

            if($current_page > $last_page){
                $statusCode = HttpStatusCodes::NOT_FOUND;
                $statusMessage = HttpStatusCodes::getMessage($statusCode);
                return ResponseFormatter::error($statusMessage,  $statusCode);
            }else{
                return ResponseFormatter::success($formattedMembers, $last_page,  $current_page);
            }
            
            
        } catch (\Exception $e) {
            return ResponseFormatter::error($e->getMessage(), $e->getCode());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
