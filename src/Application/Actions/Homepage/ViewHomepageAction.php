<?php


namespace App\Application\Actions\Homepage;


use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class ViewHomepageAction extends Action {

    /**
     * {@inheritdoc}
     */
    protected function action(): Response {
        $this->logger->info("Homepage was viewed.");

        $response = $this->view->render($this->response, 'home.phtml');
        return $response;
    }
}
