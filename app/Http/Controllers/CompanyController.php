<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\JsonResponse;

class CompanyController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Company::all());
    }

    public function store(CompanyRequest $request): JsonResponse
    {
        $company = Company::create($request->validated());
        return response()->json($company, 201);
    }

    public function show(Company $company): JsonResponse
    {
        return response()->json($company);
    }

    public function update(CompanyRequest $request, Company $company): JsonResponse
    {
        $company->update($request->validated());
        return response()->json($company);
    }

    public function destroy(Company $company): JsonResponse
    {
        $company->delete();
        return response()->json(null, 204);
    }
}
