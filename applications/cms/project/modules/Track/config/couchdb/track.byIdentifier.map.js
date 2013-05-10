/**
 * Access all TrackWorkflowItem by identifier.
 */
function(doc)
{
    if (doc.type && 'TrackWorkflowItem' === doc.type)
    {
        emit(doc._id, doc);
    }
}
