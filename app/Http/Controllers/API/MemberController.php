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

     /**
     * @OA\Get(
     *     path="/api/members",
     *     tags={"Members"},
     *     summary="Get Members Information",
     *     description="Retrieve a paginated list of members (10 per page) with optional filtering by name.",
     *     operationId="getMembers",
     *      @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Search term for filtering members by full name.",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="return array model members"
     *     )
     * )
     */
    public function index(Request $request)
    {
        try {
            $query = Member::query();
            $searchTerm = $request->input('search');

         

            if (!empty($searchTerm)) {
                $query->where('full_name', 'LIKE', '%' . $searchTerm . '%');
            }

            $members = $query->paginate(10);
            $totalPage =  $members->lastPage();
            $currentPage = $members->currentPage();


            $formattedMembers = MemberResource::collection($members);

            if($currentPage > $totalPage){
                $statusCode = HttpStatusCodes::notFound;
                $statusMessage = HttpStatusCodes::getMessage($statusCode);
                return ResponseFormatter::error($statusMessage,  $statusCode);
            }else{
                return ResponseFormatter::success($formattedMembers, $totalPage,  $currentPage);
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
