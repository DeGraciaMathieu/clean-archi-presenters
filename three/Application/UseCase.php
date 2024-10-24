<?php

namespace Three\Application;

use Three\Domain\Repository;
use Three\Domain\UserNotFoundException;

class UseCase
{
    public function __construct(
        private readonly Repository $repository,
    ) {}

    public function handle(UseCaseRequest $request, UseCasePresenter $presenter): mixed
    {
        try {

            $user = $this->repository->find($request->name());

            $response = new UseCaseResponse($user);

            return $presenter->present($response);

        } catch (UserNotFoundException $e) {
            return $presenter->userNotFound();
        }
    }
}
