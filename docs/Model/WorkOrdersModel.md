# WorkOrdersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_code** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ORG_CODE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**order** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ORD_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**department** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_DEPT  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 6  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**event** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_EVT_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**function** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_FUNC_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**assigned_to** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ACCOUNT_2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 8  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**issue_date** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ISSUE_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**issue_time** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ISSUE_TIME_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**printed_date** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_PRT_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**printed_time** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_PRT_TIME_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**printed_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_PRT_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**printed** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_PRT_STATUS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**status** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_STATUS  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**revision_number** | **int** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_PRT_REV_NBR  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**rush** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_STS_2  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 1  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ENT_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**entered_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_ENT_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_UPD_DATE_ISO  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**changed_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_UPD_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**due_date** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_DUE_DATE  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**due_time** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_DUE_TIME  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**completed_on** | [**\DateTime**](\DateTime.md) | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_CLOSE_STAMP  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 
**completed_by** | **string** | &lt;div class&#x3D;\&quot;tooltip\&quot;&gt;Info&lt;span class&#x3D;\&quot;tooltiptext\&quot;&gt;&lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Database column:&lt;/span&gt; EV701_CLOSE_USER_ID  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Length:&lt;/span&gt; 10  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Read Only&lt;/span&gt;  &lt;div class&#x3D;\&quot;TooltipSpace\&quot;&gt;&lt;/div&gt;  &lt;span class&#x3D;\&quot;tooltipHeader\&quot;&gt;Searchable&lt;/span&gt;&lt;/span&gt;&lt;/div&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

