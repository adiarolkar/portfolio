function classReg(s) {
	return new RegExp("(^|\\s+)" + s + "(\\s+|$)")
}

function toggleClass(s, a) {
	var e = hasClass(s, a) ? removeClass : addClass;
	e(s, a)
}
var hasClass, addClass, removeClass;
"classList" in document.documentElement ? (hasClass = function(s, a) {
	return s.classList.contains(a)
}, addClass = function(s, a) {
	s.classList.add(a)
}, removeClass = function(s, a) {
	s.classList.remove(a)
}) : (hasClass = function(s, a) {
	return classReg(a).test(s.className)
}, addClass = function(s, a) {
	hasClass(s, a) || (s.className = s.className + " " + a)
}, removeClass = function(s, a) {
	s.className = s.className.replace(classReg(a), " ")
});
var classie = {
	hasClass: hasClass,
	addClass: addClass,
	removeClass: removeClass,
	toggleClass: toggleClass,
	has: hasClass,
	add: addClass,
	remove: removeClass,
	toggle: toggleClass
};
"function" == typeof define && define.amd ? define(classie) : window.classie = classie;
! function(t) {
	"use strict";

	function i(t, i) {
			for (var s in i) i.hasOwnProperty(s) && (t[s] = i[s]);
			return t
	}

	function s(t, s) {
			this.el = t, this.options = i({}, this.options), i(this.options, s), this._init(), this._initEvents()
	}
	var e = t.Modernizr,
			n = {
					WebkitTransition: "webkitTransitionEnd",
					MozTransition: "transitionend",
					OTransition: "oTransitionEnd",
					msTransition: "MSTransitionEnd",
					transition: "transitionend"
			},
			r = n[e.prefixed("transition")],
			a = {
					csstransitions: e.csstransitions
			};
	s.prototype.options = {
			speed: 500,
			easing: "ease",
			paths: {
					rect: "M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33",
					curve: {
							right: "M33,0h41c0,0,5,9.871,5,29.871C79,49.871,74,60,74,60H32.666h-0.125H6c0,0,5-10,5-30S6,0,6,0H33",
							left: "M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"
					}
			}
	}, s.prototype._init = function() {
			this.itemsList = this.el.querySelector("ul"), this.items = [].slice.call(this.itemsList.querySelectorAll("li")), this.itemsCount = this.items.length, this.curr = this.old = 0, this.isAnimating = !1, this.itemsList.style.width = 100 * this.itemsCount + "%", a && (this.itemsList.style.WebkitTransition = "-webkit-transform " + this.options.speed + "ms " + this.options.easing, this.itemsList.style.transition = "transform " + this.options.speed + "ms " + this.options.easing);
			var t = this;
			if (this.items.forEach(function(i) {
							i.style.width = 100 / t.itemsCount + "%"
					}), this.itemsCount > 1) {
					var i = document.createElement("nav"),
							s = function(t, s, e) {
									var n = document.createElement("span");
									return n.className = t, n.innerHTML = s, e && classie.add(n, "disabled"), i.appendChild(n), n
							},
							e = function(t) {
									var i = document.createDocumentFragment(),
											s = document.createElement("div");
									for (s.innerHTML = t; s.firstChild;) i.appendChild(s.firstChild);
									return i
							};
					this.navPrev = s("prev", '<img class="prev-img" src="./img/arrow.png"/>', !0), this.navNext = s("next", '<img class="next-img" src="./img/arrow.png"/>'), this.el.appendChild(i), this.items.forEach(function(i) {
							var s = e('<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none"><path d="' + t.options.paths.rect + '"/></svg>');
							i.insertBefore(s, i.childNodes[0]);
							var n = Snap(i.querySelector("svg"));
							i.path = n.select("path")
					})
			}
	}, s.prototype._initEvents = function() {
			var t = this;
			if (this.itemsCount > 1) {
					this.navPrev.addEventListener("click", function() {
							t._navigate("prev")
					}), this.navNext.addEventListener("click", function() {
							t._navigate("next")
					});
					var i = function() {
							t.isAnimating = !1
					};
					a ? t.itemsList.addEventListener(r, i) : i.call(), document.addEventListener("keydown", function(i) {
							var s = i.keyCode || i.which;
							switch (s) {
									case 37:
											t._navigate("prev");
											break;
									case 39:
											t._navigate("next")
							}
					})
			}
	}, s.prototype._navigate = function(t) {
			return this.isAnimating || "next" === t && this.curr >= this.itemsCount - 1 || "prev" === t && this.curr <= 0 ? !1 : (this.isAnimating = !0, this.direction = t, this.old = this.curr, "next" === t && this.curr < this.itemsCount - 1 ? ++this.curr : "prev" === t && this.curr > 0 && --this.curr, void this._slide())
	}, s.prototype._slide = function() {
			var t = this,
					i = function() {
							t._toggleNavControls();
							var i = -1 * t.curr * 100 / t.itemsCount;
							t.itemsList.style.WebkitTransform = "translate3d(" + i + "%,0,0)", t.itemsList.style.transform = "translate3d(" + i + "%,0,0)"
					};
			this._morphSVGs(i)
	}, s.prototype._morphSVGs = function(t) {
			var i = this.options.speed,
					s = this.options.paths.curve.left,
					e = this.options.paths.curve.right,
					n = this.options.paths.rect,
					r = this.old < this.curr ? "right" : "left";
			this.items[this.old].path.stop().animate({
					path: "right" === r ? s : e
			}, .5 * i, mina.easeout), setTimeout(function() {
					t.call()
			}, .2 * i);
			var a = this.items[this.curr];
			a.querySelector("path").setAttribute("d", "right" === r ? s : e), setTimeout(function() {
					a.path.stop().animate({
							path: n
					}, 3 * i, mina.elastic)
			}, .5 * i)
	}, s.prototype._toggleNavControls = function() {
			switch (this.curr) {
					case 0:
							classie.remove(this.navNext, "disabled"), classie.add(this.navPrev, "disabled");
							break;
					case this.itemsCount - 1:
							classie.add(this.navNext, "disabled"), classie.remove(this.navPrev, "disabled");
							break;
					default:
							classie.remove(this.navNext, "disabled"), classie.remove(this.navPrev, "disabled")
			}
	}, t.SliderFx = s
}(window);
(function() {
	var t = [].indexOf || function(t) {
					for (var e = 0, n = this.length; e < n; e++) {
							if (e in this && this[e] === t) return e
					}
					return -1
			},
			e = [].slice;
	(function(t, e) {
			if (typeof define === "function" && define.amd) {
					return define("waypoints", ["jquery"], function(n) {
							return e(n, t)
					})
			} else {
					return e(t.jQuery, t)
			}
	})(window, function(n, r) {
			var i, o, l, s, f, u, c, a, h, d, p, y, v, w, g, m;
			i = n(r);
			a = t.call(r, "ontouchstart") >= 0;
			s = {
					horizontal: {},
					vertical: {}
			};
			f = 1;
			c = {};
			u = "waypoints-context-id";
			p = "resize.waypoints";
			y = "scroll.waypoints";
			v = 1;
			w = "waypoints-waypoint-ids";
			g = "waypoint";
			m = "waypoints";
			o = function() {
					function t(t) {
							var e = this;
							this.$element = t;
							this.element = t[0];
							this.didResize = false;
							this.didScroll = false;
							this.id = "context" + f++;
							this.oldScroll = {
									x: t.scrollLeft(),
									y: t.scrollTop()
							};
							this.waypoints = {
									horizontal: {},
									vertical: {}
							};
							this.element[u] = this.id;
							c[this.id] = this;
							t.bind(y, function() {
									var t;
									if (!(e.didScroll || a)) {
											e.didScroll = true;
											t = function() {
													e.doScroll();
													return e.didScroll = false
											};
											return r.setTimeout(t, n[m].settings.scrollThrottle)
									}
							});
							t.bind(p, function() {
									var t;
									if (!e.didResize) {
											e.didResize = true;
											t = function() {
													n[m]("refresh");
													return e.didResize = false
											};
											return r.setTimeout(t, n[m].settings.resizeThrottle)
									}
							})
					}
					t.prototype.doScroll = function() {
							var t, e = this;
							t = {
									horizontal: {
											newScroll: this.$element.scrollLeft(),
											oldScroll: this.oldScroll.x,
											forward: "right",
											backward: "left"
									},
									vertical: {
											newScroll: this.$element.scrollTop(),
											oldScroll: this.oldScroll.y,
											forward: "down",
											backward: "up"
									}
							};
							if (a && (!t.vertical.oldScroll || !t.vertical.newScroll)) {
									n[m]("refresh")
							}
							n.each(t, function(t, r) {
									var i, o, l;
									l = [];
									o = r.newScroll > r.oldScroll;
									i = o ? r.forward : r.backward;
									n.each(e.waypoints[t], function(t, e) {
											var n, i;
											if (r.oldScroll < (n = e.offset) && n <= r.newScroll) {
													return l.push(e)
											} else if (r.newScroll < (i = e.offset) && i <= r.oldScroll) {
													return l.push(e)
											}
									});
									l.sort(function(t, e) {
											return t.offset - e.offset
									});
									if (!o) {
											l.reverse()
									}
									return n.each(l, function(t, e) {
											if (e.options.continuous || t === l.length - 1) {
													return e.trigger([i])
											}
									})
							});
							return this.oldScroll = {
									x: t.horizontal.newScroll,
									y: t.vertical.newScroll
							}
					};
					t.prototype.refresh = function() {
							var t, e, r, i = this;
							r = n.isWindow(this.element);
							e = this.$element.offset();
							this.doScroll();
							t = {
									horizontal: {
											contextOffset: r ? 0 : e.left,
											contextScroll: r ? 0 : this.oldScroll.x,
											contextDimension: this.$element.width(),
											oldScroll: this.oldScroll.x,
											forward: "right",
											backward: "left",
											offsetProp: "left"
									},
									vertical: {
											contextOffset: r ? 0 : e.top,
											contextScroll: r ? 0 : this.oldScroll.y,
											contextDimension: r ? n[m]("viewportHeight") : this.$element.height(),
											oldScroll: this.oldScroll.y,
											forward: "down",
											backward: "up",
											offsetProp: "top"
									}
							};
							return n.each(t, function(t, e) {
									return n.each(i.waypoints[t], function(t, r) {
											var i, o, l, s, f;
											i = r.options.offset;
											l = r.offset;
											o = n.isWindow(r.element) ? 0 : r.$element.offset()[e.offsetProp];
											if (n.isFunction(i)) {
													i = i.apply(r.element)
											} else if (typeof i === "string") {
													i = parseFloat(i);
													if (r.options.offset.indexOf("%") > -1) {
															i = Math.ceil(e.contextDimension * i / 100)
													}
											}
											r.offset = o - e.contextOffset + e.contextScroll - i;
											if (r.options.onlyOnScroll && l != null || !r.enabled) {
													return
											}
											if (l !== null && l < (s = e.oldScroll) && s <= r.offset) {
													return r.trigger([e.backward])
											} else if (l !== null && l > (f = e.oldScroll) && f >= r.offset) {
													return r.trigger([e.forward])
											} else if (l === null && e.oldScroll >= r.offset) {
													return r.trigger([e.forward])
											}
									})
							})
					};
					t.prototype.checkEmpty = function() {
							if (n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical)) {
									this.$element.unbind([p, y].join(" "));
									return delete c[this.id]
							}
					};
					return t
			}();
			l = function() {
					function t(t, e, r) {
							var i, o;
							if (r.offset === "bottom-in-view") {
									r.offset = function() {
											var t;
											t = n[m]("viewportHeight");
											if (!n.isWindow(e.element)) {
													t = e.$element.height()
											}
											return t - n(this).outerHeight()
									}
							}
							this.$element = t;
							this.element = t[0];
							this.axis = r.horizontal ? "horizontal" : "vertical";
							this.callback = r.handler;
							this.context = e;
							this.enabled = r.enabled;
							this.id = "waypoints" + v++;
							this.offset = null;
							this.options = r;
							e.waypoints[this.axis][this.id] = this;
							s[this.axis][this.id] = this;
							i = (o = this.element[w]) != null ? o : [];
							i.push(this.id);
							this.element[w] = i
					}
					t.prototype.trigger = function(t) {
							if (!this.enabled) {
									return
							}
							if (this.callback != null) {
									this.callback.apply(this.element, t)
							}
							if (this.options.triggerOnce) {
									return this.destroy()
							}
					};
					t.prototype.disable = function() {
							return this.enabled = false
					};
					t.prototype.enable = function() {
							this.context.refresh();
							return this.enabled = true
					};
					t.prototype.destroy = function() {
							delete s[this.axis][this.id];
							delete this.context.waypoints[this.axis][this.id];
							return this.context.checkEmpty()
					};
					t.getWaypointsByElement = function(t) {
							var e, r;
							r = t[w];
							if (!r) {
									return []
							}
							e = n.extend({}, s.horizontal, s.vertical);
							return n.map(r, function(t) {
									return e[t]
							})
					};
					return t
			}();
			d = {
					init: function(t, e) {
							var r;
							e = n.extend({}, n.fn[g].defaults, e);
							if ((r = e.handler) == null) {
									e.handler = t
							}
							this.each(function() {
									var t, r, i, s;
									t = n(this);
									i = (s = e.context) != null ? s : n.fn[g].defaults.context;
									if (!n.isWindow(i)) {
											i = t.closest(i)
									}
									i = n(i);
									r = c[i[0][u]];
									if (!r) {
											r = new o(i)
									}
									return new l(t, r, e)
							});
							n[m]("refresh");
							return this
					},
					disable: function() {
							return d._invoke.call(this, "disable")
					},
					enable: function() {
							return d._invoke.call(this, "enable")
					},
					destroy: function() {
							return d._invoke.call(this, "destroy")
					},
					prev: function(t, e) {
							return d._traverse.call(this, t, e, function(t, e, n) {
									if (e > 0) {
											return t.push(n[e - 1])
									}
							})
					},
					next: function(t, e) {
							return d._traverse.call(this, t, e, function(t, e, n) {
									if (e < n.length - 1) {
											return t.push(n[e + 1])
									}
							})
					},
					_traverse: function(t, e, i) {
							var o, l;
							if (t == null) {
									t = "vertical"
							}
							if (e == null) {
									e = r
							}
							l = h.aggregate(e);
							o = [];
							this.each(function() {
									var e;
									e = n.inArray(this, l[t]);
									return i(o, e, l[t])
							});
							return this.pushStack(o)
					},
					_invoke: function(t) {
							this.each(function() {
									var e;
									e = l.getWaypointsByElement(this);
									return n.each(e, function(e, n) {
											n[t]();
											return true
									})
							});
							return this
					}
			};
			n.fn[g] = function() {
					var t, r;
					r = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
					if (d[r]) {
							return d[r].apply(this, t)
					} else if (n.isFunction(r)) {
							return d.init.apply(this, arguments)
					} else if (n.isPlainObject(r)) {
							return d.init.apply(this, [null, r])
					} else if (!r) {
							return n.error("jQuery Waypoints needs a callback function or handler option.")
					} else {
							return n.error("The " + r + " method does not exist in jQuery Waypoints.")
					}
			};
			n.fn[g].defaults = {
					context: r,
					continuous: true,
					enabled: true,
					horizontal: false,
					offset: 0,
					triggerOnce: false
			};
			h = {
					refresh: function() {
							return n.each(c, function(t, e) {
									return e.refresh()
							})
					},
					viewportHeight: function() {
							var t;
							return (t = r.innerHeight) != null ? t : i.height()
					},
					aggregate: function(t) {
							var e, r, i;
							e = s;
							if (t) {
									e = (i = c[n(t)[0][u]]) != null ? i.waypoints : void 0
							}
							if (!e) {
									return []
							}
							r = {
									horizontal: [],
									vertical: []
							};
							n.each(r, function(t, i) {
									n.each(e[t], function(t, e) {
											return i.push(e)
									});
									i.sort(function(t, e) {
											return t.offset - e.offset
									});
									r[t] = n.map(i, function(t) {
											return t.element
									});
									return r[t] = n.unique(r[t])
							});
							return r
					},
					above: function(t) {
							if (t == null) {
									t = r
							}
							return h._filter(t, "vertical", function(t, e) {
									return e.offset <= t.oldScroll.y
							})
					},
					below: function(t) {
							if (t == null) {
									t = r
							}
							return h._filter(t, "vertical", function(t, e) {
									return e.offset > t.oldScroll.y
							})
					},
					left: function(t) {
							if (t == null) {
									t = r
							}
							return h._filter(t, "horizontal", function(t, e) {
									return e.offset <= t.oldScroll.x
							})
					},
					right: function(t) {
							if (t == null) {
									t = r
							}
							return h._filter(t, "horizontal", function(t, e) {
									return e.offset > t.oldScroll.x
							})
					},
					enable: function() {
							return h._invoke("enable")
					},
					disable: function() {
							return h._invoke("disable")
					},
					destroy: function() {
							return h._invoke("destroy")
					},
					extendFn: function(t, e) {
							return d[t] = e
					},
					_invoke: function(t) {
							var e;
							e = n.extend({}, s.vertical, s.horizontal);
							return n.each(e, function(e, n) {
									n[t]();
									return true
							})
					},
					_filter: function(t, e, r) {
							var i, o;
							i = c[n(t)[0][u]];
							if (!i) {
									return []
							}
							o = [];
							n.each(i.waypoints[e], function(t, e) {
									if (r(i, e)) {
											return o.push(e)
									}
							});
							o.sort(function(t, e) {
									return t.offset - e.offset
							});
							return n.map(o, function(t) {
									return t.element
							})
					}
			};
			n[m] = function() {
					var t, n;
					n = arguments[0], t = 2 <= arguments.length ? e.call(arguments, 1) : [];
					if (h[n]) {
							return h[n].apply(null, t)
					} else {
							return h.aggregate.call(null, n)
					}
			};
			n[m].settings = {
					resizeThrottle: 100,
					scrollThrottle: 30
			};
			return i.on("load.waypoints", function() {
					return n[m]("refresh")
			})
	})
}).call(this);
$(document).ready(function() {
	$("#logo").hover(function() {
			$('.ball').addClass('animated bounces');
	}, function() {
			$('.ball').removeClass('animated bounces');
	});
	var canvas = document.getElementById('canvascontainer');
	var clone = document.getElementById('blurCanvasBottom');
	var cloneCtx = clone.getContext('2d');
	var ctx = canvas.getContext('2d');
	var w = $('#blurCanvasTop').width();
	var h = $('#blurCanvasTop').height();
	var ww = $(window).width();
	var wh = $(window).height();
	canvas.width = ww;
	canvas.height = wh;
	var partCount = 50;
	var particles = [];

	function particle() {
			this.color = 'rgba(255,154,26,' + Math.random() + ')';
			this.x = randomInt(0, ww);
			this.y = randomInt(0, wh);
			this.direction = {
					"x": -1 + Math.random() * 2,
					"y": -1 + Math.random() * 2
			};
			this.vx = 0.3 * Math.random();
			this.vy = 0.3 * Math.random();
			this.radius = randomInt(2, 3);
			this.float = function() {
					this.x += this.vx * this.direction.x;
					this.y += this.vy * this.direction.y;
			};
			this.changeDirection = function(axis) {
					this.direction[axis] *= -1;
			};
			this.boundaryCheck = function() {
					if (this.x >= ww) {
							this.x = ww;
							this.changeDirection("x");
					} else if (this.x <= 0) {
							this.x = 0;
							this.changeDirection("x");
					}
					if (this.y >= wh) {
							this.y = wh;
							this.changeDirection("y");
					} else if (this.y <= 0) {
							this.y = 0;
							this.changeDirection("y");
					}
			};
			this.draw = function() {
					ctx.beginPath();
					ctx.fillStyle = this.color;
					ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
					ctx.fill();
			};
	}

	function clearCanvas() {
			cloneCtx.clearRect(0, 0, ww, wh);
			ctx.clearRect(0, 0, ww, wh);
	}

	function createParticles() {
			for (i = 0; i < partCount; i++) {
					var p = new particle();
					particles.push(p);
			}
	}

	function drawParticles() {
			for (i = 0; i < particles.length; i++) {
					p = particles[i];
					p.draw();
			}
	}

	function updateParticles() {
			for (var i = particles.length - 1; i >= 0; i--) {
					p = particles[i];
					p.float();
					p.boundaryCheck();
			}
	}
	createParticles();
	drawParticles();

	function animateParticles() {
			clearCanvas();
			drawParticles();
			updateParticles();
			cloneCtx.drawImage(canvas, 0, 0);
			requestAnimationFrame(animateParticles);
	}
	requestAnimationFrame(animateParticles);
	cloneCtx.drawImage(canvas, 0, 0);
	$(window).on('resize', function() {
			ww = $(window).width();
			wh = $(window).height();
			canvas.width = ww;
			canvas.height = wh;
			clearCanvas();
			particles = [];
			createParticles();
			drawParticles();
	});

	function randomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1) + min);
	}

	function velocityInt(min, max) {
			return Math.random() * (max - min + 1) + min;
	}

	function openMenu() {
			menuIsOpen = !0, window.innerWidth < 769 ? $(".menu").animate({
					right: -170
			}, 200).animate({
					right: -200
			}, 200) : $(".menu").animate({
					right: -70
			}, 200).animate({
					right: -100
			}, 200), $(".menu-item:nth-child(1)").animate({
					marginLeft: -25
			}, 200).animate({
					marginLeft: 5
			}, 200).animate({
					marginLeft: -3
			}, 150).animate({
					marginLeft: 0
			}, 100), $(".menu-item:nth-child(2)").delay(50).animate({
					marginLeft: -25
			}, 200).animate({
					marginLeft: 5
			}, 200).animate({
					marginLeft: -3
			}, 150).animate({
					marginLeft: 0
			}, 100), $(".menu-item:nth-child(3)").delay(100).animate({
					marginLeft: -25
			}, 200).animate({
					marginLeft: 5
			}, 200).animate({
					marginLeft: -3
			}, 150).animate({
					marginLeft: 0
			}, 100), $(".menu-item:nth-child(4)").delay(150).animate({
					marginLeft: -25
			}, 200).animate({
					marginLeft: 5
			}, 200).animate({
					marginLeft: -3
			}, 150).animate({
					marginLeft: 0
			}, 100)
	}

	function closeMenu() {
			menuIsOpen = !1, $(".menu").animate({
					right: -400
			}, 200)
	}

	function toggleMenu() {
			menuIsOpen ? ($menuToggle.removeClass("menu-open"), closeMenu()) : ($menuToggle.addClass("menu-open"), openMenu())
	}
	var menuIsOpen = !1,
			$menu = $(".menu"),
			$menuItem = $(".menu-item"),
			$menuBg = $(".menu-bg"),
			$menuToggle = $(".menu-toggle"),
			menuWidth = -300,
			menuItemOffset = 0,
			menuBgSkew = 0,
			timeScale = {
					v: 1
			};
	$menuToggle.click(function() {
			toggleMenu()
	}),
			function() {
					function t(t) {
							classie.add(t.target.parentNode, "input--filled")
					}

					function e(t) {
							"" === t.target.value.trim() && classie.remove(t.target.parentNode, "input--filled")
					}
					String.prototype.trim || ! function() {
									var t = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
									String.prototype.trim = function() {
											return this.replace(t, "")
									}
							}(),
							function() {
									function t(t, e) {
											for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
											return t
									}

									function e(e, n) {
											this.el = e, this.options = t({}, this.options), t(this.options, n), this.init()
									}
									e.prototype.options = {
											speed: {
													reset: 800,
													active: 150
											},
											easing: {
													reset: mina.elastic,
													active: mina.easein
											}
									}, e.prototype.init = function() {
											this.shapeEl = this.el.querySelector("span.morph-shape");
											var t = Snap(this.shapeEl.querySelector("svg"));
											this.pathEl = t.select("path"), this.paths = {
													reset: this.pathEl.attr("d"),
													active: this.shapeEl.getAttribute("data-morph-active")
											}, this.initEvents()
									}, e.prototype.initEvents = function() {
											this.el.addEventListener("mousedown", this.down.bind(this)), this.el.addEventListener("touchstart", this.down.bind(this)), this.el.addEventListener("mouseup", this.up.bind(this)), this.el.addEventListener("touchend", this.up.bind(this)), this.el.addEventListener("mouseout", this.up.bind(this))
									}, e.prototype.down = function() {
											this.pathEl.stop().animate({
													path: this.paths.active
											}, this.options.speed.active, this.options.easing.active)
									}, e.prototype.up = function() {
											this.pathEl.stop().animate({
													path: this.paths.reset
											}, this.options.speed.reset, this.options.easing.reset)
									}, [].slice.call(document.querySelectorAll("button.button--effect-1")).forEach(function(t) {
											new e(t)
									}), [].slice.call(document.querySelectorAll("button.button--effect-2")).forEach(function(t) {
											new e(t, {
													speed: {
															reset: 650,
															active: 650
													},
													easing: {
															reset: mina.elastic,
															active: mina.elastic
													}
											})
									})
							}(), [].slice.call(document.querySelectorAll("input.input__field")).forEach(function(n) {
									"" !== n.value.trim() && classie.add(n.parentNode, "input--filled"), n.addEventListener("focus", t), n.addEventListener("blur", e)
							}), [].slice.call(document.querySelectorAll("textarea.input__field")).forEach(function(n) {
									"" !== n.value.trim() && (alert("q"), classie.add(inputEl.parentNode, "input--filled")), n.addEventListener("focus", t), n.addEventListener("blur", e)
							})
			}(),
			function() {
					var t = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
					t && (console.log(''))
			}(),
			function() {
					new SliderFx(document.getElementById("slideshow"), {
							easing: "cubic-bezier(.8,0,.2,1)"
					})
			}(), $("#contact .button__text").hover(function() {
					setTimeout(function() {
							$("#contact .morph-shape svg").css("stroke", "#FF9A19")
					}, 200)
			}, function() {
					$("#contact .morph-shape svg").css("stroke", "white")
			}), $(".social-buttons .button").hover(function() {
					setTimeout(function() {
							$(".social-buttons .morph-shape svg").css("stroke", "#FF9A19")
					}, 200)
			}), $(".project-description .button").hover(function() {
					setTimeout(function() {
							$(".project-description .morph-shape svg").css("stroke", "#fff").css("fill", "#fff")
					}, 100)
			}, function() {
					$(".project-description .morph-shape svg").css("stroke", "#FF9A19").css("fill", "#FF9A19")
			}), $(".more-link .button").hover(function() {
					setTimeout(function() {
							$(".more-link .morph-shape svg").css("stroke", "#fff").css("fill", "#fff")
					}, 100)
			}, function() {
					$(".more-link .morph-shape svg").css("stroke", "#FF9A19").css("fill", "#FF9A19")
			}), $("#backdrop").waypoint(function(t) {
					"down" == t && setTimeout(function() {
							$(".profile").css("display", "block")
					}, 1e3)
			}), $("#menu").waypoint(function(t) {
					"down" == t && setTimeout(function() {
							$("#portfolio .container").css("display", "block")
					}, 500)
			}), $("#work").waypoint(function(t) {
					"down" == t && setTimeout(function() {
							$("#contact .container").css("display", "block")
					}, 500)
			}), $(".scrollIndicator a").on("click", function() {
					var t = $(this);
					$("html, body").stop().animate({
							scrollTop: $(t.attr("href")).offset().top - 0
					}, 1250, "easeInOutExpo"), event.preventDefault()
			}), $(".scroll-top a").on("click", function() {
					var t = $(this);
					$("html, body").stop().animate({
							scrollTop: $(t.attr("href")).offset().top - 0
					}, 1250, "easeInOutExpo"), event.preventDefault()
			}), $(".menu-items a").bind("click", function(t) {
					var e = $(this);
					$("html, body").stop().animate({
							scrollTop: $(e.attr("href")).offset().top - 0
					}, 1250, "easeInOutExpo"), t.preventDefault()
			})
});
setTimeout(function() {
	var node = document.querySelector('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]');
	node.style.display = "none";
}, 100);