<?php

class __Mustache_e552a70adedfe411dac6798ff2fec251 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('footersmall');
        $buffer .= $this->sectionA0bc568b1bb898cb6d953dede9350c74($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footersmall');
        if (empty($value)) {
            
            $buffer .= $indent . '<footer id="page-footer" class="footer-popover footer-dark bg-dark text-light">
';
            $value = $context->find('footerblock');
            $buffer .= $this->sectionDdc3bcacad4598b54b6f4245e32e929a($context, $indent, $value);
            $buffer .= $indent . '</footer>
';
            $buffer .= $indent . '<!--E.O.Footer-->
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionD6941b231183d81625a3128b7ad2db7b($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function sectionFbab451920f0eb5d9b5639a814cf6979(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <p>{{{copyright_footer}}}</p>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0bc568b1bb898cb6d953dede9350c74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
    <div id="footer">
        <div class="footer-bottom">
            {{# copyright_footer}}
                <p>{{{copyright_footer}}}</p>
            {{/ copyright_footer}}
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<footer id="page-footer" class=" footer-popover footer-dark bg-dark text-light">
';
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '        <div class="footer-bottom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->sectionFbab451920f0eb5d9b5639a814cf6979($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2de901e01d12a1249dca63a14bd9363f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <p>{{{copyright_footer}}}</p>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <p>';
                $value = $this->resolveValue($context->find('copyright_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2bb27d99fcee3b2120ef1613c3a8ff8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.page_doc_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9013d4a5a4988d74bb15930508e58503(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.services_support_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4184bc884d75fc40a83b97aa6d9fd873(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div>{{{ output.supportemail }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div>';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5a5bc4a0ad6072691fae550e22d7003(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div>{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div>{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div>{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionF2bb27d99fcee3b2120ef1613c3a8ff8($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section9013d4a5a4988d74bb15930508e58503($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section4184bc884d75fc40a83b97aa6d9fd873($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cef0c729bd31199c0f96ce94b38f287(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbadd554e70ec7af082056d50928f237(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section417f99f891d9ce90a203cd1a4b37a721(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionEbadd554e70ec7af082056d50928f237($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDdc3bcacad4598b54b6f4245e32e929a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="footer">
   
                                  
                                     

            <div class="footer-bottom">
                {{# copyright_footer}}
                    <p>{{{copyright_footer}}}</p>
                {{/ copyright_footer}}

                {{! Moodle footer debug footer }}
                <div class="footer-content-debugging">
                    <div class="container">{{{ output.debug_footer_html }}}</div>
                </div>
            </div>

         
    
            <div class="footer-content-popover container" data-region="footer-content-popover">
            {{# output.has_popover_links }}
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div>{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div>{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div>{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
                </div>
            {{/ output.has_popover_links }}
        
            <div class="footer-section p-3 border-bottom">
                <div class="logininfo">
                    {{{ output.login_info }}}
                </div>
                <div class="tool_usertours-resettourcontainer">
                </div>
                {{{ output.standard_footer_html }}}
                {{{ output.standard_end_of_body_html }}}
            </div>

            <div class="footer-section p-3">
                <div>{{#str}}poweredbymoodle, core{{/str}}</div>
                {{#output.moodle_release}}
                    <div>
                        {{#str}}version, core{{/str}} {{{ output.moodle_release }}}
                    </div>
                {{/output.moodle_release}}
            </div>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="footer">
';
                $buffer .= $indent . '   
';
                $buffer .= $indent . '                                  
';
                $buffer .= $indent . '                                     
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="footer-bottom">
';
                $value = $context->find('copyright_footer');
                $buffer .= $this->section2de901e01d12a1249dca63a14bd9363f($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="footer-content-debugging">
';
                $buffer .= $indent . '                    <div class="container">';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '         
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '            <div class="footer-content-popover container" data-region="footer-content-popover">
';
                $value = $context->findDot('output.has_popover_links');
                $buffer .= $this->sectionA5a5bc4a0ad6072691fae550e22d7003($context, $indent, $value);
                $buffer .= $indent . '        
';
                $buffer .= $indent . '            <div class="footer-section p-3 border-bottom">
';
                $buffer .= $indent . '                <div class="logininfo">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.login_info'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="tool_usertours-resettourcontainer">
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="footer-section p-3">
';
                $buffer .= $indent . '                <div>';
                $value = $context->find('str');
                $buffer .= $this->section3cef0c729bd31199c0f96ce94b38f287($context, $indent, $value);
                $buffer .= '</div>
';
                $value = $context->findDot('output.moodle_release');
                $buffer .= $this->section417f99f891d9ce90a203cd1a4b37a721($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6941b231183d81625a3128b7ad2db7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.util.js_pending(\'theme_boost/loader\');
require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
    Drawer.init();
    M.util.js_complete(\'theme_boost/loader\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.util.js_pending(\'theme_boost/loader\');
';
                $buffer .= $indent . 'require([\'theme_boost/loader\', \'theme_boost/drawer\'], function(Loader, Drawer) {
';
                $buffer .= $indent . '    Drawer.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'theme_boost/loader\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
