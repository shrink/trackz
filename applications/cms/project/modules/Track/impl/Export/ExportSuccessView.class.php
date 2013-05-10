<?php

class Track_Export_ExportSuccessView extends TrackBaseView
{
    public function executeText(AgaviRequestDataHolder $parameters)
    {
        $this->getResponse()->setContent("Finished exporting ur Track documents.");
    }
}
