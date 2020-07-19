/*! This file is auto-generated */
!function(i){"use strict";var e,t,l;l=wp.media.view.MediaFrame.Post.extend({createStates:function(){this.states.add([new wp.media.controller.Library({id:"gallery",title:wp.media.view.l10n.createGalleryTitle,priority:40,toolbar:"main-gallery",filterable:"uploaded",multiple:"add",editable:!0,library:wp.media.query(_.defaults({type:"image"},this.options.library))}),new wp.media.controller.GalleryEdit({library:this.options.selection,editing:this.options.editing,menu:"gallery"}),new wp.media.controller.GalleryAdd])}}),e=i.MediaWidgetModel.extend({}),t=i.MediaWidgetControl.extend({events:_.extend({},i.MediaWidgetControl.prototype.events,{"click .media-widget-gallery-preview":"editMedia"}),initialize:function(e){var t=this;i.MediaWidgetControl.prototype.initialize.call(t,e),_.bindAll(t,"updateSelectedAttachments","handleAttachmentDestroy"),t.selectedAttachments=new wp.media.model.Attachments,t.model.on("change:ids",t.updateSelectedAttachments),t.selectedAttachments.on("change",t.renderPreview),t.selectedAttachments.on("reset",t.renderPreview),t.updateSelectedAttachments(),wp.customize&&wp.customize.previewer&&t.selectedAttachments.on("change",function(){wp.customize.previewer.send("refresh-widget-partial",t.model.get("widget_id"))})},updateSelectedAttachments:function(){var e,t,i,d,a=this;e=a.model.get("ids"),t=_.pluck(a.selectedAttachments.models,"id"),i=_.difference(t,e),_.each(i,function(e){a.selectedAttachments.remove(a.selectedAttachments.get(e))}),_.difference(e,t).length&&(d=wp.media.query({order:"ASC",orderby:"post__in",perPage:-1,post__in:e,query:!0,type:"image"})).more().done(function(){a.selectedAttachments.reset(d.models)})},renderPreview:function(){var e,t,i,d=this;e=d.$el.find(".media-widget-preview"),t=wp.template("wp-media-widget-gallery-preview"),(i=d.previewTemplateProps.toJSON()).attachments={},d.selectedAttachments.each(function(e){i.attachments[e.id]=e.toJSON()}),e.html(t(i))},isSelected:function(){return!this.model.get("error")&&0<this.model.get("ids").length},editMedia:function(){var e,d,t,a=this;e=new wp.media.model.Selection(a.selectedAttachments.models,{multiple:!0}),t=a.mapModelToMediaFrameProps(a.model.toJSON()),e.gallery=new Backbone.Model(t),t.size&&a.displaySettings.set("size",t.size),d=new l({frame:"manage",text:a.l10n.add_to_widget,selection:e,mimeType:a.mime_type,selectedDisplaySettings:a.displaySettings,showDisplaySettings:a.showDisplaySettings,metadata:t,editing:!0,multiple:!0,state:"gallery-edit"}),(wp.media.frame=d).on("update",function(e){var t,i=d.state();(t=e||i.get("selection"))&&(t.gallery&&a.model.set(a.mapMediaToModelProps(t.gallery.toJSON())),a.selectedAttachments.reset(t.models),a.model.set({ids:_.pluck(t.models,"id")}))}),d.$el.addClass("media-widget"),d.open(),e&&e.on("destroy",a.handleAttachmentDestroy)},selectMedia:function(){var e,d,t,a=this;e=new wp.media.model.Selection(a.selectedAttachments.models,{multiple:!0}),(t=a.mapModelToMediaFrameProps(a.model.toJSON())).size&&a.displaySettings.set("size",t.size),d=new l({frame:"select",text:a.l10n.add_to_widget,selection:e,mimeType:a.mime_type,selectedDisplaySettings:a.displaySettings,showDisplaySettings:a.showDisplaySettings,metadata:t,state:"gallery"}),(wp.media.frame=d).on("update",function(e){var t,i=d.state();(t=e||i.get("selection"))&&(t.gallery&&a.model.set(a.mapMediaToModelProps(t.gallery.toJSON())),a.selectedAttachments.reset(t.models),a.model.set({ids:_.pluck(t.models,"id")}))}),d.$el.addClass("media-widget"),d.open(),e&&e.on("destroy",a.handleAttachmentDestroy),d.$el.find(":focusable:first").focus()},handleAttachmentDestroy:function(e){this.model.set({ids:_.difference(this.model.get("ids"),[e.id])})}}),i.controlConstructors.media_gallery=t,i.modelConstructors.media_gallery=e}(wp.mediaWidgets);