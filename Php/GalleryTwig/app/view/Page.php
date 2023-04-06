<?php


namespace app\view;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;

class Page
{
    private object $twig;
    private string $template;
    public function __construct($template)
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $twig = new \Twig\Environment($loader,[
            'debug' => true,
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $this->twig =$twig;
        $this->template = $template. '.twig';
    }

    /**
     * @param string $template
     * @param array $data
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function render( array $data) : string {
        try {
            return $this->twig->render($this->template,  $data);
        } catch (LoaderError $loaderError){
            echo 'an error occurs during template loading' . $loaderError->getMessage();
        } catch (RuntimeError $runtimeError){
            echo 'an error occurs at runtime'. $runtimeError->getMessage();
        } catch (SyntaxError $syntaxError){
            echo 'a syntax error occurs during lexing or parsing of a template.'. $syntaxError->getMessage();
        }
        return 'oops';

    }
}

