# Widget Custom Image Selector 

## About this extension

Introduces a new field type **widgetimageselector/chooser** in the widget declaration to use the
standard Magento image chooser in widgets as well.

## How-To-Use

Just use **widgetimageselector/chooser** as the type when declaring the widget:

<image>
     <label>Image</label>
     <type>widgetimageselector/chooser</type>
</image>

Example widget.xml:
  <?xml version="1.0"?>
    <widgets>
        <widget_sample type="yourmodule/widget" translate="label description" module="youmodule">
            <name>Test Widget</name>
            <parameters>
                <image>
                    <label>Image</label>
                    <required>1</required>
                    <visible>1</visible>
                    <type>widgetimageselector/chooser</type>
                    <sort_order>30</sort_order>
                </image>
            </parameters>
        </widget_sample>
    </widgets>
    
   So I hope this module has helped you
