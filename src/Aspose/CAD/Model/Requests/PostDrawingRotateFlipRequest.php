<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="PostDrawingRotateFlipRequest.php">
 *   Copyright (c) 2018 Aspose.CAD Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace Aspose\CAD\Model\Requests;

/*
 * Request model for postDrawingRotateFlip operation.
 */
class PostDrawingRotateFlipRequest
{
    /*
     * Input drawing
     */
    public $drawing_data;
	
    /*
     * Resulting file format.
     */
    public $output_format;
	
    /*
     * Rotate/flip operation to apply.
     */
    public $rotate_flip_type;
	
    /*
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public $out_path;
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public $storage;
    
	
    /*
     * Initializes a new instance of the PostDrawingRotateFlipRequest class.
     *  
     * @param \SplFileObject $drawing_data Input drawing
     * @param string $output_format Resulting file format.
     * @param string $rotate_flip_type Rotate/flip operation to apply.
     * @param string $out_path Path to updated file (if this is empty, response contains streamed file).
     * @param string $storage Your Aspose Cloud Storage name.
     */
    public function __construct($drawing_data, $output_format, $rotate_flip_type, $out_path = null, $storage = null)             
    {
        $this->drawing_data = $drawing_data;
        $this->output_format = $output_format;
        $this->rotate_flip_type = $rotate_flip_type;
        $this->out_path = $out_path;
        $this->storage = $storage;
    }

    /*
     * Input drawing
     */
    public function get_drawing_data()
    {
        return $this->drawing_data;
    }

    /*
     * Input drawing
     */
    public function set_drawing_data($value)
    {
        $this->drawing_data = $value;
        return $this;
    }
	
    /*
     * Resulting file format.
     */
    public function get_output_format()
    {
        return $this->output_format;
    }

    /*
     * Resulting file format.
     */
    public function set_output_format($value)
    {
        $this->output_format = $value;
        return $this;
    }
	
    /*
     * Rotate/flip operation to apply.
     */
    public function get_rotate_flip_type()
    {
        return $this->rotate_flip_type;
    }

    /*
     * Rotate/flip operation to apply.
     */
    public function set_rotate_flip_type($value)
    {
        $this->rotate_flip_type = $value;
        return $this;
    }
	
    /*
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public function get_out_path()
    {
        return $this->out_path;
    }

    /*
     * Path to updated file (if this is empty, response contains streamed file).
     */
    public function set_out_path($value)
    {
        $this->out_path = $value;
        return $this;
    }
	
    /*
     * Your Aspose Cloud Storage name.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Your Aspose Cloud Storage name.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
}