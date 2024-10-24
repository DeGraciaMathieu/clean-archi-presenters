<?php

namespace Three\Presenter;

use Three\Infrastructure\View;
use Three\Application\UseCaseResponse;
use Three\Application\UseCasePresenter;

class HtmlPresenter implements UseCasePresenter
{
    public function __construct(
        private View $view,
    ) {}

    public function present(UseCaseResponse $response): string
    {
        $viewModel = new HtmlViewModel($response);

        return $this->view->render('welcome', compact('viewModel'));
    }

    public function userNotFound(): string
    {
        return $this->view->render('user-not-found');
    }
}
