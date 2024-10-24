<?php

namespace First\Application;

use First\Domain\Repository;
use First\Domain\UserNotFoundException;

class UseCase
{
    public function __construct(
        private readonly Repository $repository,
    ) {}

    public function handle(UseCaseRequest $request, UseCasePresenter $presenter): void
    {
        try {

            $user = $this->repository->find($request->name());

            $response = new UseCaseResponse($user);

            $presenter->present($response);

        } catch (UserNotFoundException $e) {
            $presenter->userNotFound();
        }
    }
}
