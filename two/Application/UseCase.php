<?php

namespace Two\Application;

use Two\Domain\Repository;
use Two\Domain\UserNotFoundException;

class UseCase
{
    public function __construct(
        private readonly Repository $repository,
    ) {}

    public function handle(UseCaseRequest $request, UseCasePresenter $presenter): UseCaseResponse
    {
        try {

            $response = new UseCaseResponse();

            $user = $this->repository->find($request->name());

            $response->userFound($user);

        } catch (UserNotFoundException $e) {
            $response->userNotFound($e);
        }

        return $response;
    }
}
