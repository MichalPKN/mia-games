<?php

/**
 * Template class
 */
class Template
{
    /**
     * Name of the template file
     *
     * @var string
     */
    private $filename;

    /**
     * data to fill in the template file
     *
     * @var array
     */
    private $data;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
        $this->data = [];
    }

    /**
     * sets data, returns itself to render
     *
     * @param array $data
     * @return Template
     */
    public function data(array $data): Template
    {
        $this->data = $data;
        return $this;
    }

    /**
     * puts data to a template file and returns it
     *
     * @return string
     */
    public function render(): string
    {
        if (!file_exists(TMPLT_DIR . $this->filename)) {
            return "";
        }
        $content = file_get_contents(TMPLT_DIR . $this->filename);
        foreach ($this->data as $key => $val) {
            $content = str_replace('{' . $key . '}', $val, $content);
        }
        return $content;
    }
}