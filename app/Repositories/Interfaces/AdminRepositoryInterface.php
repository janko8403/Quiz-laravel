<?php

namespace App\Repositories\Interfaces;

interface AdminRepositoryInterface {

	// Users
	public function getAllUsers();
	public function getUsersWithRole();
	public function getActiveUsers();
	public function getUser($id);
	public function createUser(array $request);
	public function deleteUser($id);

	public function createMessage($request);
	public function getMessages();
	public function deleteMessage($id);

	public function createQuiz($request);
	
	public function getCompetitionById($id);
	public function createCompetition($request);
	public function deleteCompetition($id);
	public function getAllCompetitionMessages();

	public function getAllLanguage();
	public function createLanguage($request);
	public function getLanguageById($id);
	public function updateLanguage($request, $id);
	public function deleteLanguage($id);

	public function getLng($lng);
}